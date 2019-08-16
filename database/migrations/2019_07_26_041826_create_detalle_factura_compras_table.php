<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFacturaComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre");
            $table->string("tipo");
            $table->string("direccion");
            $table->string("telefono");
        });


        Schema::create('factura_compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime("fecha");
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id')->references('id')->on('proveedor');

        });

        Schema::create('detalle_factura_compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("cantidad");
            $table->float("precio");
            $table->unsignedBigInteger('factura_compra_id');
            $table->foreign('factura_compra_id')->references('id')->on('factura_compra');
            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id')->references('id')->on('libro');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_factura_compra');
        Schema::dropIfExists('factura_compra');
        Schema::dropIfExists('proveedor');
    }
}
