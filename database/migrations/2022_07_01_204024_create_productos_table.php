<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->bigIncrements('id');
            $table->string('nombre_producto');
            $table->string('observacion');
            $table->char('nombre_comercial', 50);
            $table->bigInteger('tipoProducto_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipoProducto_id')->references('id')->on('tipo_productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
