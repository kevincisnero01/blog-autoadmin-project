<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index');
    }

    public function create()
    {
        $categories = Category::pluck('name','id');

        $categories->prepend('Seleccione un elemento','');

        $tags = Tag::all();

        return view('admin.posts.create',compact('categories','tags'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'tags' => 'required|min:1',
            'extract' => 'string|nullable',
            'body' => 'required|string|nullable',
            'status' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        $data['user_id'] = auth()->id();

        $post = Post::create($data);

        return redirect()->route('admin.posts.index')->with('status','Registro Exitoso');
    }
}
