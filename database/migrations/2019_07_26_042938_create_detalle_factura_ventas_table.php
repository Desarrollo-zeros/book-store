<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFacturaVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura_venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("cantidad");
            $table->float("precio");
            $table->float("valorNeto");
            $table->unsignedBigInteger('factura_venta_id');
            $table->foreign('factura_venta_id')->references('id')->on('factura_venta');
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
        Schema::dropIfExists('detalle_factura_venta');
    }
}
