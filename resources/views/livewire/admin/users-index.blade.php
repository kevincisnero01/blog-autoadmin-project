<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o email del usuario a buscar...">
        </div>
        
        @if($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            @empty(!$user->my_role)
                                {{ $user->my_role->name }}
                            @endempty
                        </td>
                        <td width="200px" class="text-center">
                            <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('admin.users.destroy',$user->id)}}" method="post" class="d-inline-block" onclick="return confirm('¿Esta seguro de eliminar el registro?')">
                                @csrf @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2 float-right">
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>

        @else
        <div class="card-body" class="text-center">
           <strong>No hay registros</strong> 
        </div>
        @endif
    </div>
</div>
