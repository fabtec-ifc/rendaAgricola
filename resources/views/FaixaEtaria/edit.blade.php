@extends("app")

@section("body")

<form id="form" action="{{ route('faixaEtaria.update', $faixaEtaria->id) }}" method="POST">
@csrf
@method("PUT")

@include("faixaEtaria.form")

@endsection