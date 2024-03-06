<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_venta',
        'id_articulo',
        'cantidad',
        'subtotal',
    ];
}
