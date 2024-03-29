@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
    <h1>Crear Nuevo Post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.posts.store', 'files' => 'true']) !!}

            @include('admin.posts.partials.form')
        
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
    <script src="/vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js"></script>
    <script src="/vendor/ckeditor5/build/ckeditor.js"></script>

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
