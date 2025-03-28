@extends("app")

@section("body")

<form id="form" action="{{ route('tipoUsoTerra.update', $tipoUsoTerra->id) }}" method="POST">
@csrf
@method("PUT")

@include("tipoUsoTerra.form")

@endsection