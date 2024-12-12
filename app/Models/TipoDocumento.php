<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    // Si la tabla tiene un nombre diferente a 'document_types', lo defines aquí
    protected $table = 'document_types';

    // Campos asignables
    protected $fillable = [
        'name',
    ];

    // Relación con los usuarios
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
