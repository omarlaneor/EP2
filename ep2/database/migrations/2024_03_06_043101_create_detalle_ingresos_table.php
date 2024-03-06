<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articulos_id')->constrained('articulos');
            $table->foreignId('ingresos_id')->constrained('ingresos');
            $table->char('precio_compra');
            $table->char('precio_venta');
            $table->char('stock_inicial');
            $table->char('stock_actual');
            $table->date('fecha_produccion');
            $table->date('fecha_vencimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ingresos');
    }
};
