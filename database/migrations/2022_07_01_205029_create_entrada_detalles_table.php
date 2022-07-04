<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_detalles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->bigIncrements('id');
            $table->bigInteger('entradaCabecera_id')->unsigned();
            $table->bigInteger('producto_id')->unsigned();
            $table->integer('cantidad_pedido');
            $table->integer('cantidad_entregada');
            $table->double('precio_unitario', 8, 2);
            $table->double('precio_total', 8, 2);
            $table->double('monto_totalPedido', 8, 2);
            $table->double('monto_totalEntregado', 8, 2);
            $table->date('fecha_vencimiento');
            $table->integer('lote');
            $table->timestamps();

            $table->foreign('entradaCabecera_id')->references('id')->on('entrada_cabeceras')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada_detalles');
    }
}
