@extends("app")

@section("body")

<form id="form" action="{{ route('tipoMaoDeObra.store') }}" method="POST">
@csrf

@include("tipoMaoDeObra.form")

@endsection