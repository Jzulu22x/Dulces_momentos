<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferencia extends Model
{
    use HasFactory;

    // Si la tabla tiene un nombre diferente a 'preferences', lo defines aquí
    protected $table = 'preferences';

    // Campos asignables
    protected $fillable = [
        'user_id',
        'description',
    ];

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
