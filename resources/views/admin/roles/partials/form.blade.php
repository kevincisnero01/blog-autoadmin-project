<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese un nombre']) !!}
    @error('name') <span class="text-danger"> {{ $message }} </span>@enderror
</div>

<hr class="my-4">

<h2 class="h3">Listado de Permisos</h2>

@foreach($permissions as $permission)
<div>
    <label>
        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
        <i class="{{ $permission->icon }} mr-1"></i>
        <span class="text-uppercase">{{ $permission->description }}</span>
    </label>
</div>
@endforeach
