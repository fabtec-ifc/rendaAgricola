@extends("app")

@section("body")

<form id="form" action="{{ route('usoTerra.store') }}" method="POST">
@csrf

@include("usoTerra.form")

@endsection