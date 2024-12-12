<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    // Si la tabla tiene un nombre diferente, lo defines aquí
    protected $table = 'orders';

    // Campos asignables
    protected $fillable = [
        'user_id',
        'active',
    ];

    // Relación con los productos
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'orders_products');
    }

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
