<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class Detalle_Venta_Controller extends Controller
{

    public function index()
    {
        $detalles_ventas = Venta::all();
        return response()->json(['Detalles_ventas' => $detalles_ventas]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $detalles_ventas = Venta::create($request->all());
        return response()->json(['Detalle_ventas: ' => $detalles_ventas]);
    }


    public function show($id)
    {
        $detalles_ventas = Venta::findOrFail($id);
        return response()->json(['Detalles_Ventas:' => $detalles_ventas]);
    }


    public function edit(Venta $detalles_Ventas)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $detalles_ventas = Venta::findOrFail($id);
        $detalles_ventas->update($request->all());
        return response()->json(['detalles_ventas: ' => $detalles_ventas]);
    }


    public function destroy($id)
    {
        $detalles_ventas = Venta::findOrFail($id);
        $detalles_ventas->delete();
        return response()->json(['message' => 'Detalles de la venta eliminados correctamente.']);
    }
}
