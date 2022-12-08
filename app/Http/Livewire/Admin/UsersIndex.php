<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    
    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.admin.users-index', compact('users'));
    }
}
