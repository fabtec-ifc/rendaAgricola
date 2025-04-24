@extends("app")

@section("body")

<form id="form" action="{{ route('area.update', $area->id) }}" method="POST">
@csrf
@method("PUT")

@include("area.form")

@endsection
