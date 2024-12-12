<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Si la tabla tiene un nombre diferente, se define aquí
    protected $table = 'products';

    // Campos que pueden ser asignados en masa
    protected $fillable = [
        'name',
        'portions',
        'portion_unit_value',
    ];

    // Relación con la tabla 'orders_products'
    public function orders()
    {
        return $this->belongsToMany(Orden::class, 'orders_products');
    }
}
