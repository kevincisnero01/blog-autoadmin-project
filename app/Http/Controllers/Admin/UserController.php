<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {   
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required'
        ]);

        //ENCRIPT PASS
        $data['password'] = bcrypt($request->password);

        //CREATE USER
        $user = User::create($data)->assignRole('Admin');

        //CREATE ROLE
        $user->roles()->sync($request->role);

        return redirect()->route('admin.users.index', $user)->with('status', 'Usuario creado con Exito');

    }

    public function edit(User $user)
    {
        //GET ROLES
        $roles = Role::all();

        //GET & SET ROLE 
        $user['role'] = empty(!$user->my_role) ? $user->my_role->id : null;

        return view('admin.users.edit', compact('user','roles'));
    }

    public function update(Request $request,User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        //UPDATE USER
        $user->update($data);

        //UPDATE ROLE
        $user->roles()->sync($request->role);

        return redirect()->route('admin.users.edit', $user)->with('status', 'Usuario actualizado con Exito');

    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index', $user)->with('status', 'Usuario eliminado con Exito');
    }
}
