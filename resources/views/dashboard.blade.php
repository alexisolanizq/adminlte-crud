@extends('adminlte::page')

@section('title', 'Adminlte-Users')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <p>Bienvenido {{ auth()->user()->name }} | {{ $msg }}</p>
@stop
