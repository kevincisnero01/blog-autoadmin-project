@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-secondary float-right">Crear Post</a>
    <h1>Listado de Post</h1>

     @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        <strong>{{ session('status')}}</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

@stop

@section('content')
    @livewire('admin.post-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Post Lists!'); </script>
@stop
