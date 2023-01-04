@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
    <h1>Crear Nuevo Post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.posts.store', 'files' => 'true']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Ingrese el Nombre']) !!}
            @error('name') <span class="text-danger">{{ $message}}</span> @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug','Slug') !!}
            {!! Form::text('slug',null,['class' => 'form-control','placeholder' => 'Ingrese el Slug','readonly']) !!}
            @error('slug') <span class="text-danger">{{ $message}}</span> @enderror
        </div>

        <div class="form-group">
            <p class="font-weight-bold">Categoria</p>
            {!! Form::select('category_id',$categories,null, ['class' => 'form-control']) !!}
            @error('category_id') <span class="text-danger d-block">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <p class="font-weight-bold">Etiquetas</p>
            @foreach($tags as $tag)
                <label class="mr-2">
                    {!! Form::checkbox('tags[]',$tag->id,null) !!}
                    {{ $tag->name}}
                </label>
            @endforeach
            @error('tags') <span class="text-danger d-block">{{ $message}}</span> @enderror
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    {!! Form::label('file', 'Imagen de Post') !!}
                    {!! Form::file('file', ['class' => 'form-control-file']) !!}
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores corrupti expedita odit labore enim perspiciatis beatae illum laborum aliquid quibusdam omnis facilis deleniti, culpa tempore explicabo, eligendi fuga exercitationem? Obcaecati!</p>
            </div>
            <div class="col">
                <div class="image-wrapper">
                    <img id="picture" src="https://cdn.pixabay.com/photo/2022/12/03/15/00/maui-7632875_960_720.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('extract','Extracto') !!}
            {!! Form::textarea('extract',null, ['class' => 'form-control','placeholder' => 'Ingrese el extracto del post que desea escribir...','rows' => '3']) !!}
            @error('extract') <span class="text-danger">{{ $message}}</span> @enderror
        </div>

        <div class="form-group">
            {!! Form::label('body','Cuerpo del Post') !!}
            {!! Form::textarea('body',null, ['class' => 'form-control','placeholder' => 'Ingrese el cuerpo del post que desea escribir...','rows' => '5']) !!}
            @error('body') <span class="text-danger">{{ $message}}</span> @enderror
        </div>

         <div class="form-group">
            <p class="font-weight-bold">Estado</p>
                <label class="mr-2">
                    {!! Form::radio('status',1,true) !!}
                    Borrador
                </label>
                <label class="mr-2">
                    {!! Form::radio('status',2) !!}
                    Publicado
                </label>
            @error('status') <span class="text-danger">{{ $message}}</span> @enderror
        </div>

        {!! Form::submit('Crear Post',['class' => 'btn btn-primary btn-lg']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <style>

    .image-wrapper{
        position:relative;
        padding-bottom: 56.25%;
    }

    .image-wrapper img{
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 90%;
        margin-top:5%;
    }

    </style>
@endsection

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

    <script>

        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );
    
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );

        //Change Image
        document.getElementById("file").addEventListener('change', changeImage);

        function changeImage(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            
            reader.readAsDataURL(file);
        }

    </script>

@endsection
