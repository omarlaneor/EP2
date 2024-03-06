<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class Venta_Controller extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return response()->json(['Ventas' => $ventas], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $ventas = Venta::all();
        return response()->json(['Ventas' => $ventas], 200);
    }

    public function show($id)
    {
        $ventas = Venta::find($id);
        return response()->json(['Ventas' => $ventas], 200);
    }

    public function edit(venta $ventas)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $ventas = Venta::find($id);
        $ventas->update($request->all());
        return response()->json(['Ventas' => $ventas], 200);
    }

    public function destroy($id)
    {
        $ventas = Venta::findOrFail($id);
        $ventas->delete();
        return response()->json(['message' => '¡La venta ha sido eliminada correctamente!']);
    }
}
