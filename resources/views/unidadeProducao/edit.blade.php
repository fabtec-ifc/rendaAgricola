@extends("app")

@section("body")

<form id="form" action="{{ route('unidadeProducao.update', $unidadeProducao->id) }}" method="POST">
@csrf
@method("PUT")

@include("unidadeProducao.form")

@endsection
