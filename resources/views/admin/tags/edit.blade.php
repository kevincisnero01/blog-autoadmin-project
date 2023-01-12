@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('status')}}</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card">
    <div class="card-body">
    {!! Form::model($tag,['route' => ['admin.tags.update',$tag->id], 'method' => 'put']) !!}

        @include('admin.tags.partials.form')

        {!! Form::submit('Editar Etiqueta',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    </div>    
</div>
@stop

@section('js')
    <script src="/vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js"></script>
    
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection