@extends('adminlte::page')

@section('title', 'Adminlte-Users')

@section('content_header')
    <h1>Formulario</h1>
@stop

@section('content')

    <p class="m-0">Bienvenido {{ $user->name }}</p>

    <p class="text-bold m-0"> Permisos: </p>
    <p> {{$user->area->description}} </p>

    <div class="container">
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
