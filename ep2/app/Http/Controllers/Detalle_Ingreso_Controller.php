<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class Detalle_Ingreso_Controller extends Controller
{
    public function index()
    {
        $detalles = Ingreso::all();
        return response()->json($detalles);
    }

    public function store(Request $request)
    {
        $detalles = Ingreso::create($request->all());
        return response()->json($detalles);
    }

    public function show($id)
    {
        $detalles = Ingreso::find($id);
        return response()->json($detalles);
    }

    public function update(Request $request, $id)
    {

        $request->validate(['title' => 'required', 'description' => 'required', 'amount' => 'required', 'date' => 'required']);
        $detalles = Ingreso::find($id);
        $detalles->update($request->all());
        return response()->json($detalles);
    }

    public function destroy($id)
    {
        $detalles = Ingreso::find($id);
        $detalles->delete();
        return response()->json($detalles);
    }
}
