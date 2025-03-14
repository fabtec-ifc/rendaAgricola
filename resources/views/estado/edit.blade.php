@extends("app")

@section("body")

<form id="form" action="{{ route('estado.update', $estado->id) }}" method="POST">
@csrf
@method("PUT")

@include("estado.form")

@endsection
