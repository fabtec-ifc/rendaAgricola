@extends("app")

@section("body")

<form id="form" action="{{ route('tipoMaoDeObra.update', $tipoMaoDeObra->id) }}" method="POST">
@csrf
@method("PUT")

@include("tipoMaoDeObra.form")

@endsection