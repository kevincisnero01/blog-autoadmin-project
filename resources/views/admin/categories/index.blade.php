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
                            <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmDelete{{$category->id}}">Eliminar</button>
                            
                            <!-- Modal Confirm-->
                            <div class="modal fade" id="confirmDelete{{$category->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title font-weight-bold">Confirmación</h4>
                                </div>   
                                <div class="modal-body">
                                    <form  action="{{ route('admin.categories.destroy', $category->id)}}" method="post" class="d-inline" id="formDelete{{$category->id}}">
                                        @csrf
                                        @method('delete')
                                        <h5>¿Estas seguro de eliminar la categoria <strong>{{$category->name}}</strong>?</h5>    
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger" form="formDelete{{$category->id}}">Eliminar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>

    
@stop

