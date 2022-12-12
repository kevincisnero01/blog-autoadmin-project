@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <a href="{{ route('admin.users.create') }}" class="btn btn-secondary float-right">Crear Usuario</a>

    <h1>Listado de Usuarios</h1>

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
    @livewire('admin.users-index')
@stop