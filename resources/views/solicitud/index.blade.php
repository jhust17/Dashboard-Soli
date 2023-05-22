@extends('adminlte::page')

@section('title', 'DASHBOARD')

@section('content_header')
<h1>Listado De Solicitudes</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        <a href="solicitudes/create" class="btn btn-primary mb-4">Crear</a>

        <table id="solicitudes" class="table  table-striped  mt-4" style="width:100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Solicitud</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Bloque</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">IdUsuario</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach($solicitudes as $solicitud)
                <tr>
                    <td>{{$solicitud->id}}</td>
                    <td>{{$solicitud->solicitud}}</td>
                    <td>{{$solicitud->estado}}</td>
                    <td>{{$solicitud->bloque}}</td>
                    <td>{{$solicitud->aula}}</td>
                    <td>{{$solicitud->tipo}}</td>
                    <td>{{$solicitud->detalle}}</td>
                    <td>{{$solicitud->idusuarioapp}}</td>
                    <td>
                        <form action="{{route ('solicitudes.destroy',$solicitud->id)}}" method="post">
                            <a href="/solicitudes/{{$solicitud->id}}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#solicitudes').DataTable({
        responsive: true,
        autoWidth: false,
        "lengthMenu": [
            [5, 10, 50, -1],
            [5, 10, 50, "All"]
        ]
    });
});
</script>
@stop