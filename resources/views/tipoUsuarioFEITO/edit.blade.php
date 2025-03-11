@extends('app')

@section('body')
<form id="form" action="{{ route('tipoUsuario.update', $tipoUsuario->id) }}" method="post">
@csrf
@method('PUT')

@include('tipoUsuario.form')

@endsection
