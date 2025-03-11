@extends('app')

@section('body')
<form id="form" action="{{ route('usuario.update', $usuario->id) }}" method="post">
@csrf
@method('PUT')

@include('usuario.form')

@endsection
