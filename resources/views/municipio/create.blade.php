@extends("app")

@section("body")

<form id="form" action="{{ route('municipio.form') }}" method="POST">
@csrf

@include("municipio.form")

@endsection
