@extends('adminlte::page')

@section('title', 'Create User')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')
<form action="/usuariosapp" method="post">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">User</label>
        <input type="text" class="form-control" id="user" name="user" placeholder="User">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Rol</label>
        <br>
        <select id="rol" name="rol">
            <option value="Cliente">Selecciona rol</option>
            <option value="Cliente">Cliente</option>
            <option value="Soporte">Soporte</option>
        </select>
    </div>
    <a href="/usuariosapp" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop