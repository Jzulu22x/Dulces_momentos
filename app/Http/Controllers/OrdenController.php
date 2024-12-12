<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Producto;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function store(Request $request)
    {
        // Crear una nueva orden
        $orden = Orden::create([
            'user_id' => $request->user_id, // Suponemos que el ID del usuario es enviado
            'active' => true,
        ]);

        // Relacionamos los productos con la orden
        foreach ($request->productos as $productoId) {
            $producto = Producto::find($productoId);
            $orden->productos()->attach($producto); // Método de relación muchos a muchos
        }

        return redirect()->route('productos.index')->with('success', 'Orden creada con éxito');
    }
}
