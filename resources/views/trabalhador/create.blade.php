@extends("app")

@section("body")

<form id="form" action="{{ route('trabalhador.store') }}" method="POST">
@csrf

@include("pessoaProducao.form")

@endsection
