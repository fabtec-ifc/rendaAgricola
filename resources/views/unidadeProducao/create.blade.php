@extends("app")

@section("body")

<form id="form" action="{{ route('unidadeProducao.store') }}" method="POST">
@csrf

@include("unidadeProducao.form")

@endsection
