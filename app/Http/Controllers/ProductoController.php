<?php

namespace App\Http\Controllers;

use App\Models\Producto; // Importamos el modelo Producto
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Obtenemos todos los productos de la base de datos
        $productos = Producto::all();
        
        // Pasamos los productos a la vista
        return view('productos', compact('productos'));
    }
}
