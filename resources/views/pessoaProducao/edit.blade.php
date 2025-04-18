@extends("app")

@section("body")

<form id="form" action="{{ route('pessoaProducao.update', $pessoaProducao->id) }}" method="POST">
@csrf
@method("PUT")

@include("pessoaProducao.form")

@endsection
