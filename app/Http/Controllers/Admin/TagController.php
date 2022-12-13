<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['can:admin.tags.index'])->only('index');
        $this->middleware(['can:admin.tags.create'])->only('create');
        $this->middleware(['can:admin.tags.store'])->only('store');
        $this->middleware(['can:admin.tags.edit'])->only('edit');
        $this->middleware(['can:admin.tags.update'])->only('update');
        $this->middleware(['can:admin.tags.destroy'])->only('destroy');
    }

    public function index()
    {
        return view('admin.tags.index', ['tags' => Tag::latest()->paginate(10)] );
    }

    public function create()
    {   
        $colors = [
            'blue' => 'Color Azul',
            'red' => 'Color Rojo',
            'yellow' => 'Color Amarillo',
            'green' => 'Color Verde',
            'black' => 'Color Negro',
            'brown' => 'Color Marron',
            'pink' => 'Color Rosado',
            'gray' => 'Color Gris',
            'purple' => 'Color Morado',
        ];
        return view('admin.tags.create',compact('colors'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'color' => 'required'
        ]);

        $tag = Tag::create($data);

        return redirect()->route('admin.tags.index',['tag' => $tag])->with('status','Registro Exitoso');
    }

    public function edit(Tag $tag)
    {
        $colors = [
            'blue' => 'Color Azul',
            'red' => 'Color Rojo',
            'yellow' => 'Color Amarillo',
            'green' => 'Color Verde',
            'black' => 'Color Negro',
            'brown' => 'Color Marron',
            'pink' => 'Color Rosado',
            'gray' => 'Color Gris',
            'purple' => 'Color Morado',
        ];

        return view('admin.tags.edit', compact('tag','colors'));
    }

    public function update(Request $request,Tag $tag)
    {
        $data = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'color' => 'required'
        ]);

        $tag->update($data);

        return redirect()->route('admin.tags.edit', $tag->id)->with('status','Actualización Exitosa');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')->with('status','Eliminación Exitosa');

    }
}
