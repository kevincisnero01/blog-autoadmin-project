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

    public function edit(User $user)
    {
        //GET ALL ROLES
        $roles = Role::all();

        //GET THE ROLE OF USER 
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

        //UPDATE DATA USER
        $user->update($data);

        //UPDATE ROLE
        $user->roles()->sync($request->role);

        return redirect()->route('admin.users.edit', $user)->with('status', 'Actualización con Exito');

    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index', $user)->with('status', 'Eliminación con Exito');
    }
}
