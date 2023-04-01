@extends('adminlte::page')

@section('title', 'Crear | Admin')

@section('content_header')
    <h1 class="m-3 font-weight-bold">Inicio</h1>
@stop

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p class="m-0">Bienvenido administrador {{ $user->name }}</p>
                <p class="text-bold m-0"> Permisos: </p>
                <p> {{ $user->area->description }} </p>
            </div>
            <div>
                <a href="/admin/" class="btn btn-primary">Ir al listado</a>
            </div>
        </div>

        @include('admin.form')
    </div>
@stop
