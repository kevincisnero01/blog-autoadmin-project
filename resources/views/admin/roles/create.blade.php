@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Rol</h1>
@stop

@section('content')
<div class="card"> 
<div class="card-body"> 
    {!! Form::open(['route' => 'admin.roles.store']) !!}
        
        @include('admin.roles.partials.form')
        
        {!! Form::submit('Crear Rol',['class' => 'btn btn-lg btn-primary']) !!}

        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary mt-2 float-right">Volver</a>

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