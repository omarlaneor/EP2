<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas_Generadas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_trabajador',
        'id_articulo',
        'fecha',
        'hora',
        'total',
        'estado',
        'created_at',
        'updated_at'
    ];
}
