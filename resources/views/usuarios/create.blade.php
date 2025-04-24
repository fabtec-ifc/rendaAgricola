@extends("app")

@section("body")

<form id="form" action="{{ route('usuario.store') }}" method="POST">
@csrf

@include("usuario.form")

@endsection