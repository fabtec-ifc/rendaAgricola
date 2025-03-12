@extends("app")

@section("body")

<form id="form" action="{{ route('tipoUsuario.store') }}" method="POST">
@csrf

@include("tipoUsuario.form")

@endsection