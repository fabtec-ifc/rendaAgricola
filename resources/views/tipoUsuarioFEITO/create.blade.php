@extends('app')

@section('body')
<form id="form" action="{{ route('tipoUsuario.store') }}" method="post">
@csrf

@include('tipoUsuario.form')

@endsection
