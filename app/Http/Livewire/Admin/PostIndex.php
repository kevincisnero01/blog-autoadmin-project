<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {   
        $user = auth()->user();   

        if($user->hasRole('Admin')){
            $posts = Post::where('name','LIKE',"%$this->search%")
                    ->latest('id')
                    ->paginate();
        }else{
            $posts = Post::where('name','LIKE',"%$this->search%")
                    ->where('user_id', $user->id)
                    ->latest('id')
                    ->paginate();
        }

        return view('livewire.admin.post-index', compact('posts'));
    }
}
