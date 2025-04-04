<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Marca;
use Illuminate\Http\Request;

class CamionController extends Controller
{
    public function index()
    {
        $camiones = Camion::with(['transporte', 'marca'])->paginate(10);
        return view('camiones.index', compact('camiones'));
    }

    public function create()
    {
        $transportes = Transporte::all();
        $marcas = Marca::all();
        return view('camiones.create', compact('transportes', 'marcas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|string|max:8|unique:camion,placa',
            'codigo_interno' => 'required|string|max:8|unique:camion,codigo_interno',
            'id_transporte' => 'required|exists:transporte,id_transporte',
            'id_marca' => 'required|exists:marca,id_marca',
            'color' => 'required|string|max:35',
            'modelo' => 'required|date',
            'capacidad_toneladas' => 'required|string|max:45',
        ]);

        Camion::create($request->all());

        return redirect()->route('camiones.index')->with('success', 'Camión agregado correctamente.');
    }

    public function edit(Camion $camion)
    {
        $transportes = Transporte::all();
        $marcas = Marca::all();
        return view('camiones.edit', compact('camion', 'transportes', 'marcas'));
    }

    public function update(Request $request, Camion $camion)
    {
        $request->validate([
            'placa' => 'required|string|max:8|unique:camion,placa,' . $camion->id_camion . ',id_camion',
            'codigo_interno' => 'required|string|max:8|unique:camion,codigo_interno,' . $camion->id_camion . ',id_camion',
            'id_transporte' => 'required|exists:transporte,id_transporte',
            'id_marca' => 'required|exists:marca,id_marca',
            'color' => 'required|string|max:35',
            'modelo' => 'required|date',
            'capacidad_toneladas' => 'required|string|max:45',
        ]);

        $camion->update($request->all());

        return redirect()->route('camiones.index')->with('success', 'Camión actualizado correctamente.');
    }

    public function destroy(Camion $camion)
    {
        $camion->delete();
        return redirect()->route('camiones.index')->with('success', 'Camión eliminado correctamente.');
    }
}
