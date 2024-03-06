<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Ingreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_articulo',
        'id_cliente',
        'id_empleado',
        'fecha',
        'ingreso',
    ];
}
