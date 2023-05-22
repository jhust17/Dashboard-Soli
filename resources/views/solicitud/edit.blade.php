@extends('adminlte::page')

@section('title', 'Edit  Soicitud')

@section('content_header')
    <h1>Editar Solicitud</h1>
@stop

@section('content')
<form action="/solicitudes/{{$solicitud->id}}" method="post">
@csrf    
@method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Solicitudes</label>
        <input type="text" class="form-control" value="{{$solicitud->solicitud}}" id="solicitud" name="solicitud" placeholder="solicitud">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <br>
        <select id="estado" name="estado" >
            <option value="{{$solicitud->estado}}">{{$solicitud->estado}}</option>
            <option value="Espera">Espera</option>
            <option value="Proceso">Proceso</option>
            <option value="Completado">Completado</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Bloque</label>
        <br>
        <select id="bloque" name="bloque" >
            <option value="{{$solicitud->bloque}}">{{$solicitud->bloque}}</option>
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
        <select id="aula" name="aula" >
            <option value="{{$solicitud->aula}}">{{$solicitud->aula}}</option>
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
        <select id="tipo" name="tipo" >
            <option value="{{$solicitud->tipo}}">{{$solicitud->tipo}}</option>
            <option value="Soporte tecnico">Soporte tecnico</option>
            <option value="Mantenimiento">Mantenimiento</option>
            <option value="Instalacion">Instalacion</option>
            <option value="Ninguna">Ninguna</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Detalle</label>
        <textarea class="form-control" id="detalle" value="{{$solicitud->detalle}}"  name="detalle"  rows="3" >Ninguna...</textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Idusuarioapp</label>
        <input type="number" class="form-control" value="{{$solicitud->idusuarioapp}}" id="idusuarioapp"  name="idusuarioapp" placeholder="idusuario">
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