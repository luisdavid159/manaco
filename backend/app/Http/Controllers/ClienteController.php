<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Cliente::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombres' => 'required|string|max:50',
            'apellidos' => 'required|string|max:50',
            'direccion' => 'required|string|max:150',
            'celular' => 'required|string|max:50',
            'nit' => 'required|string|max:20',
        ]);

        $cliente = Cliente::create($validated);

        return response()->json([
            'message' => 'Cliente registrado exitosamente',
            'cliente' => $cliente
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        return response()->json($cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $cliente->update($request->all());

        return response()->json([
            'message' => 'Cliente actualizado exitosamente',
            'cliente' => $cliente
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $cliente->delete();

        return response()->json(['message' => 'Cliente eliminado exitosamente'], 200);
    }
}
