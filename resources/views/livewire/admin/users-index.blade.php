<div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
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
                        <td width="200px" class="text-center">
                            <a href="#" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2 float-right">
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
