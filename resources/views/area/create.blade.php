@extends("app")

@section("body")

<form id="form" action="{{ route('area.store') }}" method="POST">
@csrf

@include("area.form")

@endsection
