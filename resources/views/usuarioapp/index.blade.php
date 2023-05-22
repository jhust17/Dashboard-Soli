@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
<h1>App Usuarios</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">


        <a href="usuariosapp/create" class="btn btn-primary mb-4">Crear</a>

        <table id="usuarios" class="table  table-striped  mt-4" style="width:100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">User</th>
                    <th scope="col">Password</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->user}}</td>
                    <td>{{$usuario->password}}</td>
                    <td>{{$usuario->rol}}</td>
                    <td>
                        <form action="{{route ('usuariosapp.destroy',$usuario->id)}}" method="post">
                            <a href="/usuariosapp/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
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
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#usuarios').DataTable({
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