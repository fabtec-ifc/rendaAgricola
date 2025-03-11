@extends('app')

@section('body')

@php
    use Illuminate\Support\Carbon;    
@endphp

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuário não habilitado, Inicie o processo de verificação de email</div>
                <div class="card-body">

                    @if (Auth::user()->lastMail && Carbon::parse(Auth::user()->lastMail)->addDay()->isPast() || !Auth::user()->lastMail)
                        <h6 id="verificationMessage">O token de verificação foi enviado para {{ Auth::user()->email }}</h6>
                    @else
                        <h6 id="verificationMessage">Email já enviado nas ultimas 24 horas , entre em contado com um adm</h6>
                    @endif

                    <form action="{{ route('verify.token') }}" method="post" id="formVerify">
                        @csrf
                        <div class="form-group">
                            <label for="token">Token:</label>
                            <input type="text" name="token" id="token" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" id="btnVerify">Verificar Token</button>
                    </form>

                    <div id="message" class="mt-3">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<script>
document.getElementById('formVerify').addEventListener('submit', function(event) {
    event.preventDefault();

    var token = document.getElementById('token').value;
    if (token === '') {
        alert('Por favor, insira o token.');
        return;
    }

    var userErrors = {{ Auth::user()->erros }};

    if (userErrors >= 3) {
        alert('Você atingiu o limite de tentativas de envio de e-mail. Entre em contato com o suporte.');
        return;
    }

    document.getElementById('formVerify').submit();
});

document.addEventListener('DOMContentLoaded', function() {
    fetch('/enviar-email', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log('Email enviado com sucesso:', data);
    })
    .catch(error => {
        console.error('Erro ao enviar email:', error);
    });
});
</script>

@endsection
