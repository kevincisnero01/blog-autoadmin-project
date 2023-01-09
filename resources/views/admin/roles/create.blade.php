@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Rol</h1>
@stop

@section('content')
<div class="card"> 
<div class="card-body"> 
    {!! Form::open(['route' => 'admin.roles.store']) !!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese un nombre']) !!}
        </div>

        <hr>

        <h2 class="h3">Listado de Permisos</h2>

        @foreach($permissions as $permission)
        <div>
            <label>
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                <i class="{{ $permission->icon }} mr-1"></i>
                <span class="text-uppercase">{{ $permission->description }}</span>
            </label>
        </div>
        @endforeach
        
        {!! Form::submit('Crear Rol',['class' => 'btn btn-large btn-primary']) !!}

    {!! Form::close() !!}
</div>  
</div>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi Create Role'); </script>
@stop