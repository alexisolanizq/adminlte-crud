@extends('adminlte::page')

@section('title', 'Crear usuarios')

@section('content_header')
    <h1 class="m-3 font-weight-bold">Agregar un nuevo usuario</h1>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Formulario para agregar un usuario</div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
            
                    {{-- Name field --}}
                    <div class="form-group mb-3">
                        <label for="name">Nombre completo</label>
                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>
            
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
                    {{-- Email field --}}
                    <div class="form-group mb-3">
                        <label for="name">Correo</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
            
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
                    {{-- Area field --}}
                    <div class="form-group mb-3">
                        <label for="name">Área</label>
                        <select id="area" name="area_id" :value="old('area')" required
                            class="form-control @error('area') is-invalid @enderror">
                            <option value="" disabled selected>-- Seleccione un área --</option>
                            <option value="{{ 1 }}">Administrador</option>
                            <option value="{{ 2 }}">Técnico</option>
                            <option value="{{ 3 }}">Invitado</option>
                        </select>
            
                        @error('area')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
                    {{-- Password field --}}
                    <div class="form-group mb-3">
                        <label for="name">Contraseña</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="{{ __('adminlte::adminlte.password') }}">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
            
                    {{-- Register button --}}
                    <button type="submit" class="mt-3 btn btn-inline-block btn-flat btn-primary">
                        {{ __('Registrar') }}
                    </button>
            
                </form>
            </div>
        </div>
    </div>
@stop
