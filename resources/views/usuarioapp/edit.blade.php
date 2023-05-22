@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
<form action="/usuariosapp/{{$usuario->id}}" method="post">
@csrf    
@method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" value="{{$usuario->nombre}}" id="nombre" name="nombre" placeholder="nombre">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">User</label>
        <input type="text" class="form-control" value="{{$usuario->user}}" id="user" name="user" placeholder="user">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="text" class="form-control" value="{{$usuario->password}}" id="password" name="password" placeholder="password">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Rol</label>
        <br>
        <select id="rol" name="rol" >
            <option value="{{$usuario->rol}}">{{$usuario->rol}}</option>
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