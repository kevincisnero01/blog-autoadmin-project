<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;


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

}
