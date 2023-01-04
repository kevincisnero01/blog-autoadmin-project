<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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

    public function store(StorePostRequest $request)
    {
        //return $request->all();
        $post = Post::create($request->all());

        if($request->file('file')){
            
            $url = Storage::put('posts', $request->file('file'));

            $post->image()->create([
                'url' => $url
            ]);
        }

        if($request->tags){
            $post->tags()->attach($request->tags);
        }

        return redirect()->route('admin.posts.index')->with('status','Registro Exitoso');
    }
}
