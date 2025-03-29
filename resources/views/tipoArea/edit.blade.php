@extends("app")

@section("body")

<form id="form" action="{{ route('tipoArea.update', $tipoArea->id) }}" method="POST">
@csrf
@method("PUT")

@include("tipoArea.form")

@endsection
