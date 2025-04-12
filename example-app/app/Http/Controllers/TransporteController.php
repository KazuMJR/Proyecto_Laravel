<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    public function index()
    {
        $transportes = Transporte::paginate(10);
        return view('transportes.index', compact('transportes'));
    }

    public function create()
    {
        return view('transportes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:50|unique:transporte,codigo',
            'nombre' => 'required|string|max:255',
            'razon_social' => 'required|string|max:255',
        ]);

        Transporte::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'razon_social' => $request->razon_social,
        ]);

        return redirect()->route('transportes.index')->with('success', 'Transporte agregado correctamente.');
    }

    public function edit(Transporte $transporte)
    {
        return view('transportes.edit', compact('transporte'));
    }

    public function update(Request $request, Transporte $transporte)
    {
        $request->validate([
            'codigo' => 'required|string|max:50|unique:transporte,codigo,' . $transporte->id_transporte . ',id_transporte',
            'nombre' => 'required|string|max:255',
            'razon_social' => 'required|string|max:255',
        ]);

        $transporte->update([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'razon_social' => $request->razon_social,
        ]);

        return redirect()->route('transportes.index')->with('success', 'Transporte actualizado correctamente.');
    }

    public function destroy(Transporte $transporte)
    {
        $transporte->delete();
        return redirect()->route('transportes.index')->with('success', 'Transporte eliminado correctamente.');
    }
}
