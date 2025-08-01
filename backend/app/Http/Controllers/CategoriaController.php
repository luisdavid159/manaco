<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria; 
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
        ]);

        //creacion de la categoria
        $categoria = Categoria::create($request->all());
        
        return response()->json([
            'message' => 'Categoria creada exitosamente',
            'categoria' => $categoria
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return response()->json(
                ['message' => 'Categoria no encontrada'
                ],404);
        }
        return response()->json($categoria,200);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //actualizacion de la categoria
        $categoria = Categoria::find($id);

        if (!$categoria) {

            return response()->json(
                ['message' => 'Categoria no encontrada'
                ],404); }    

        $categoria->update($request->all());

        return response()->json([
            'message' => 'Categoria actualizada exitosamente',
            'categoria' => $categoria
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return response()->json(
                ['message' => 'Categoria no encontrada'
                ],404);
               
            };
        $delete = $categoria->delete();
        return response()->json([
            'message' => 'Categoria eliminada exitosamente',
            'categoria' => $categoria
        ], 200);
    }
}
