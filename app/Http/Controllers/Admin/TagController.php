<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tags.index', ['tags' => Tag::latest()->paginate(10)] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  $tag
     * @return \Illuminate\Http\Response
     */
    public function show($tag)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $tag
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')->with('status','Eliminación Exitosa');

    }
}
