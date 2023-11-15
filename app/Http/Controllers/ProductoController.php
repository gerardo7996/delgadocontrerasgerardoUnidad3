<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        return view('productos.index', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Productos();

        if($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $destino = 'images/productos/';
            $nombre = time() . '-' . $imagen->getClientOriginalName();
            $subida_completa = $request->file('imagen')->move($destino, $nombre);
            $producto->imagen = $destino . $nombre;
        }

        $producto->codigo = $request->input('codigo');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio_unitario = $request->input('precio_unitario');
        $producto->cantidad = $request->input('cantidad');
        $producto->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id_producto)
    {
        $producto = Productos::find($id_producto);
        //dd($producto);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_producto)
    {
        $producto = Productos::find($id_producto);
        $producto->delete();
        return redirect("productos");
    }
}
