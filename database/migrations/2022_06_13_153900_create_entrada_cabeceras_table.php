<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaCabecerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_cabeceras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->bigIncrements('id');
            $table->string('direccion_entrega');
            $table->date('fecha_pedido');
            $table->date('fecha_recibido');
            $table->char('numero_factura', 50);
            $table->bigInteger('proveedor_id')->unsigned();
            $table->bigInteger('documento_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->timestamps();

            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');
            $table->foreign('documento_id')->references('id')->on('tipo_documentos')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada_cabeceras');
    }
}
