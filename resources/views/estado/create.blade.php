@extends("app")

@section("body")

<form id="form" action="{{ route('estado.store') }}" method="POST">
@csrf

@include("estado.form")

@endsection
