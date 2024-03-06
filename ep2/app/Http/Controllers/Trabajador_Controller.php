<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class Trabajador_Controller extends Controller
{

    public function index()
    {
        $trabajadores = Trabajador::all();
        return response()->json(['trabajadores' => $trabajadores]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $trabajadores = Trabajador::create($request->all());
        return response()->json(['Trabajador: ' => $trabajadores]);
    }

    public function show($id)
    {
        $trabajador = Trabajador::findOrFail($id);
        return response()->json(['Trabajador:' => $trabajador]);
    }

    public function edit(Trabajador $trabajador)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $trabajador = Trabajador::findOrFail($id);
        $trabajador->update($request->all());
        return response()->json(['Trabajador: ' => $trabajador]);
    }

    public function destroy($id)
    {
        $trabajador = Trabajador::findOrFail($id);
        $trabajador->delete();
        return response()->json(['message' => '!Trabajador eliminado correctamente!']);
    }
}
