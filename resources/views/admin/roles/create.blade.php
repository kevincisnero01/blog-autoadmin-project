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