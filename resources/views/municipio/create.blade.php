@extends("app")

@section("body")

<form id="form" action="{{ route('municipio.store') }}" method="POST">
@csrf

@include("municipio.form")

@endsection
