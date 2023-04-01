@extends('adminlte::page')

@section('title', 'Inicio | Admin')

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
                <a href="/admin/create" class="btn btn-primary">Crear nuevo</a>
            </div>
        </div>

        <x-adminlte-datatable striped hoverable bordered head-theme="dark" id="table1" :heads="['Nombre', 'Correo', 'Área', 'Fecha de creación']">
            @foreach ($users as $row)
                <tr>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->area->display_name}}</td>
                    <td>{{$row->created_at->format('d-m-Y')}}</td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
@stop
