@extends("app")

@section("body")

<form id="form" action="{{ route('anoAgricola.store') }}" method="POST">
@csrf

@include("anoAgricola.form")

@endsection
