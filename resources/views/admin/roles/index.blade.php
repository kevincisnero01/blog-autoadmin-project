@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('admin.roles.create') }}" class="btn btn-secondary float-right">Crear Rol</a>
    <h1>Lista de Roles</h1>
@stop

@section('content')
<div class="card"> 
<div class="card-body">   
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td width="10px"> 
                        <a href="{{ route('admin.roles.edit',$role) }}" class="btn btn-sm btn-primary"> Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{ route('admin.roles.destroy',$role) }}" method="post" class="d-inline-block" onclick="return confirm('¿Esta seguro de elminar el registro?')">
                            @csrf 
                            @method("DELETE")    
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No hay registros</p>
            @endforelse
        </tbody>
    </table>
</div>  
</div>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop