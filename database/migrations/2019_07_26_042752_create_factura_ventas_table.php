<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime("fecha");
            $table->unsignedBigInteger('persona_id');
            $table->float("total");
            $table->foreign('persona_id')->references('id')->on('persona');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_venta');
    }
}
