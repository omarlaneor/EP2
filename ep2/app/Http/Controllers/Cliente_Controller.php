<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class Cliente_Controller extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required'
        ]);
        $clientes = Cliente::create($request->all());
        return response()->json([
            'status' => 200,
            'message' => '¡Cliente creado correctamente!',
        ]);
    }

    public function show($id)
    {
        $clientes = Cliente::find($id);
        return response()->json($clientes, 200);
    }

    public function update(Request $request, $id)
    {
        $clientes = Cliente::find($id);
        $clientes->update($request->all());
        return response()->json([
            'status' => 200,
            'message' => '¡Cliente actualizado correctamente!',
        ]);
    }

    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        return response()->json([
            'status' => 200,
            'message' => '¡Cliente eliminado correctamente!',
        ]);
    }
}
