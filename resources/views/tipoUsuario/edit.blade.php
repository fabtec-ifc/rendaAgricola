@extends("app")

@section("body")

<form id="form" action="{{ route('tipoUsuario.update', $tipoUsuario->id) }}" method="POST">
@csrf
@method("PUT")

@include("tipoUsuario.form")

@endsection