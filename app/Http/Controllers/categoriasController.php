<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class categoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        $categorias = Categoria::paginate();
        return view('categorias.index',compact('categorias'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias = new Categoria();
        $categorias->nombre=$request->nombre;
        $categorias->descripcion=$request->descripcion;
        $categorias->save();
        return redirect()->route('categorias.index',$categorias);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categorias)
    {
        return view('categorias.show', compact('categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categorias)
    {
        return view('categorias.edit',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categorias)
    {
        $categorias->nombre=$request->nombre;
        $categorias->descripcion=$request->descripcion;
        $categorias->save();
        return redirect()->route('categorias.index',$categorias);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categorias)
    {
        $categorias->delete();
        return redirect()->route('categorias.index');
    }
}
