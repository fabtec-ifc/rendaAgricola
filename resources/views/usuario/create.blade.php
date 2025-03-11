@extends('app')

@section('body')
<form id="form" action="{{ route('usuario.store') }}" method="post">
@csrf

@include('usuario.form')

@endsection
