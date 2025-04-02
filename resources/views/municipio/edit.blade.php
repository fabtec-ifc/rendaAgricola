@extends("app")

@section("body")

<form id="form" action="{{ route('municipio.update', $municipio->id) }}" method="POST">
@csrf
@method("PUT")

@include("municipio.form")

@endsection
