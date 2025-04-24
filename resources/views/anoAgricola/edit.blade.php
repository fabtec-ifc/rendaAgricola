@extends("app")

@section("body")

<form id="form" action="{{ route('anoAgricola.update', $anoAgricola->id) }}" method="POST">
@csrf
@method("PUT")

@include("anoAgricola.form")

@endsection
