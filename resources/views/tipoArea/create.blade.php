@extends("app")

@section("body")

<form id="form" action="{{ route('tipoArea.store') }}" method="POST">
@csrf

@include("tipoArea.form")

@endsection
