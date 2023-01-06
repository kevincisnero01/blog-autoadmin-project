<div>

<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre del post que desea buscar...">
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">No se encontraron registros</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-2 float-right">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

</div>
