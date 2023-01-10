@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    <strong>{{ session('status')}}</strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="card"> 
<div class="card-body"> 
    {!! Form::model($role,['route' => ['admin.roles.update',$role], 'method' => 'put']) !!}
        
        @include('admin.roles.partials.form')
        
        {!! Form::submit('Editar Rol',['class' => 'btn btn-lg btn-primary']) !!}

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