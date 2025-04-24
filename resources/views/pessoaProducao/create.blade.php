@extends("app")

@section("body")

<form id="form" action="{{ route('pessoaProducao.store') }}" method="POST">
@csrf

@include("pessoaProducao.form")

@endsection
