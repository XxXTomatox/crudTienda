<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        $productos = Producto::paginate();
        return view('productos.index',compact('productos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all();
        $productos = Producto::paginate();
        return view('productos.create',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->nombre=$request->nombre;
        $productos->descipcion=$request->descipcion;
        $productos->categorias_id=$request->categorias_id;
        $productos->save();
        return redirect()->route('productos.index',$productos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $productos)
    {
        return view('productos.show', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $productos)
    {
        return view('productos.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $productos)
    {
        $productos->nombre=$request->nombre;
        $productos->descipcion=$request->descipcion;
        $productos->categorias_id=$request->categorias_id;
        $productos->save();
        return redirect()->route('productos.index',$productos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $productos)
    {
        $productos->delete();
        return redirect()->route('productos.index');
    }
}
