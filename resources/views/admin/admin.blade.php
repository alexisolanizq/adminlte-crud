@extends('adminlte::page')

@section('title', 'Adminlte-Users')

@section('content_header')
    <h1 class="m-3 font-weight-bold">Inicio</h1>
@stop

@section('content')
    <p>Bienvenido administrador {{ auth()->user()->name }}</p>

    <div class="container">
        <div class="card">
            <div class="card-header">Lista de usuarios</div>
            <div class="card-body">
                @foreach ($users as $user)
                    <p> {{$user->name}} </p>
                @endforeach
            </div>
        </div>
    </div>
@stop
