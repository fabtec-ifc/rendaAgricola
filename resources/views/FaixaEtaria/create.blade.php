@extends("app")

@section("body")

<form id="form" action="{{ route('faixaEtaria.store') }}" method="POST">
@csrf

@include("faixaEtaria.form")

@endsection