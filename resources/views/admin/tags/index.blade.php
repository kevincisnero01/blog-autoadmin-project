@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.categories.create')
        <a href="{{ route('admin.tags.create')}}" class="btn btn-secondary float-right">Crear Etiqueta</a>
    @endcan

    <h1>Listado de Etiquetas</h1>

    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        <strong>{{session('status')}}</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif
@stop

@section('content')
<div class="card">
    <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th width="200px" class="text-center">
                    @can('admin.categories.edit','admin.categories.edit')
                        Opciones
                    @endcan
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <td>
                    {{ $tag->id }}
                </td>
                <td>
                    {{ $tag->name }}
                </td>
                <td class="text-center">
                @can('admin.categories.edit')
                    <a href="{{ route('admin.tags.edit', $tag->id ) }}" class="btn btn-info btn-xs">Editar</a>
                @endcan

                @can('admin.categories.edit')
                    <form action="{{ route('admin.tags.destroy',$tag->id )}}" method="post" class="d-inline-block" id="formDelete{{$tag->id}}">
                        @csrf
                        @method('delete')
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmDelete{{$tag->id}}">Eliminar</button>

                        <!-- Modal Confirm-->
                        <div class="modal fade" id="confirmDelete{{$tag->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title font-weight-bold">Confirmación</h4>
                                </div>   
                                <div class="modal-body">
                                    <form  action="{{ route('admin.categories.destroy', $tag->id)}}" method="post" class="d-inline" id="formDelete{{$tag->id}}">
                                        @csrf
                                        @method('delete')
                                        <h5>¿Estas seguro de eliminar la categoria <strong>{{$tag->name}}</strong>?</h5>    
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger" form="formDelete{{$tag->id}}">Eliminar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                    </form>
                @endcan    
                </td>
            </tr>    
            @endforeach
        </tbody>
    </table>

    <div class="mt-2 float-right">
        {{ $tags->links('pagination::bootstrap-4') }}
    </div>

    </div>    
</div>
  
@stop

