@extends("app")

@section("body")

<form id="form" action="{{ route('trabalho.update', $trabalho->id) }}" method="post">
@csrf
@method("PUT")

@include("trabalho.form")

@if (isset($trabalho))
    <form id="form-tag" action="{{ route('trabalho.addTag') }}" method="post">
        @csrf
        @include("trabalho.formTag")
    </form>
    <form id="form-pchave" action="{{ route('trabalho.addPalavraChave') }}" method="post">
        @csrf
        @include("trabalho.formPalavraChave")
    </form>
    <div class="col-5">
        @include('trabalho.listTag')
    </div>
    <div class="col-5">
        @include('trabalho.listPalavraChave')
    </div>
@endif

@endsection
