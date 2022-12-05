@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Etiqueta</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
    {!! Form::open(['route' => 'admin.tags.store']) !!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
            @error('name') <span class="text-danger">{{ $message}}</label> @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug','Slug') !!}
            {!! Form::text('slug',null,['class' => 'form-control','placeholder' => 'Ingrese el slug de la etiqueta','readonly']) !!}
            @error('slug') <span class="text-danger">{{ $message}}</label> @enderror
        </div>

        <div class="form-group">
            {!! Form::select('color',$colors, null, ['class' => 'form-control']) !!}
            @error('color') <span class="text-danger">{{ $message}}</label> @enderror      
        </div>

        {!! Form::submit('Guardar Etiqueta',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>    
</div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    
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
