@extends("app")

@section("body")

<form id="form" action="{{ route('trabalho.store') }}" method="post">
@csrf

@include("trabalho.form")

@endsection
