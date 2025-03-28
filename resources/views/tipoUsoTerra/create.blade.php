@extends("app")

@section("body")

<form id="form" action="{{ route('tipoUsoTerra.store') }}" method="POST">
@csrf

@include("tipoUsoTerra.form")

@endsection