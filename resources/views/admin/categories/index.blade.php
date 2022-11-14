@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Categorias</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('info')}}</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.categories.create')}}" class="btn btn-secondary btn-lg">Agregar Categoria</a>
        </div>
        <div class="card-body">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td width="200px" class="text-center">
                            <a href="{{ route('admin.categories.edit', $category->id)}}" class="btn btn-primary btn-xs">Editar</a>
                            <form action="{{ route('admin.categories.destroy', $category->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>

@stop

