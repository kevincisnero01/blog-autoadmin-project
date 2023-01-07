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
{{-- =====IMAGE===== --}}
<div class="row">
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen de Post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' =>'image/*']) !!}
            @error('file') <span class="text-danger d-block">{{ $message}}</span> @enderror
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores corrupti expedita odit labore enim perspiciatis beatae illum laborum aliquid quibusdam omnis facilis deleniti, culpa tempore explicabo, eligendi fuga exercitationem? Obcaecati!</p>
    </div>
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
                <img id="picture" src="{{ Storage::disk()->url($post->image->url) }}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2022/12/03/15/00/maui-7632875_960_720.jpg" alt="">
            @endisset
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
