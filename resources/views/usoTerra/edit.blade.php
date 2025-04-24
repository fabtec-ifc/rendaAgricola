@extends("app")

@section("body")

<form id="form" action="{{ route('usoTerra.update', $usoTerra->id) }}" method="POST">
@csrf
@method("PUT")

@include("usoTerra.form")

@endsection