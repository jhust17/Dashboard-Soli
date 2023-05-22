
@extends('adminlte::page')

@section('title', 'Create Solicitud')

@section('content_header')
    <h1>Crear Solictud</h1>
@stop

@section('content')
<form action="/solicitudes" method="post">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Solicitudes</label>
        <input type="text" class="form-control" id="solicitud" name="solicitud" placeholder="solicitud">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <br>
        <select id="estado" name="estado">
            <option value="Espera">Selecciona estado</option>
            <option value="Espera">Espera</option>
            <option value="Proceso">Proceso</option>
            <option value="Completado">Completado</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Bloque</label>
        <br>
        <select id="bloque" name="bloque">
            <option value="A">Selecciona bloque</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Aula</label>
        <br>
        <select id="aula" name="aula">
            <option value="100">Selecciona aula</option>
            <option value="100">100</option>
            <option value="101">101</option>
            <option value="102">102</option>
            <option value="103">103</option>
            <option value="104">104</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <br>
        <select id="tipo" name="tipo">
            <option value="Soporte tecnico">Selecciona tipo</option>
            <option value="Soporte tecnico">Soporte tecnico</option>
            <option value="Mantenimiento">Mantenimiento</option>
            <option value="Instalacion">Instalacion</option>
            <option value="Ninguna">Ninguna</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dettalle</label>
        <textarea class="form-control"id="detalle" name="detalle" rows="3">Ninguna...</textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Idusuarioapp</label>
        <input type="number" class="form-control" id="idusuarioapp" name="idusuarioapp" placeholder="idusuario">
    </div>
    
    <a href="/solicitudes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop