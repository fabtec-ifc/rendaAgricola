@extends('app')

@section('body')
<div class="container">
    <h1>Logs de Login</h1>

    <form method="GET" action="/logs">
        <fieldset>
            <div class="row justify-content-center mt-3">
                <div class="col-md-6 form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="start_date">Data Inicial</label>
                            <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="end_date">Data Final</label>
                            <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <label for="user_id">Usuário</label>
                            <select name="user_id" class="form-select w-75 mx-auto">
                                <option value="">Todos os Usuários</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-6 text-end">
                            <button type="submit" class="btn btn-light-blue text-blue border-blue">
                                Filtrar
                            </button>
                        </div>
                        <div class="col-6 text-start">
                            <a href="/logs" class="btn btn-light border-secondary">Limpar Filtros</a>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>

    <h3 class="mt-4">Logins de Vigilantes</h3>

    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th scope="col-1">Usuário</th>
                <th scope="col-2">Data e Hora</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->user->name }}</td>
                <td>{{ $log->data }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
