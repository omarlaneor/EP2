<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class Articulo_Controller extends Controller
{
    public function index()
    {
        $articulos = Articulo::all();
        return response()->json($articulos, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        $articulos = Articulo::create($request->all());
        return response()->json(['articulos' => $articulos]);
    }

    public function show($id)
    {
        $articulos = Articulo::find($id);
        return response()->json($articulos, 200);
    }

    public function update(Request $request, $id)
    {
        $articulos = Articulo::find($id);
        $articulos->update($request->all());
        return response()->json(['articulos' => $articulos]);
    }

    public function destroy($id)
    {
        $articulos = Articulo::find($id);
        $articulos->delete();
        return response()->json(['articulos' => $articulos]);
    }
}
