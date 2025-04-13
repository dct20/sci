<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class {
    public function up()
    {
        Schema::create('ordenes_compra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('cascade');
            $table->integer('cantidad');
            $table->date('fecha_orden');
            $table->date('fecha_entrega_estimada');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordenes_compra');
    }
};
