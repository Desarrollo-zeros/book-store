<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("ISBN",100);
            $table->unique("ISBN");
            $table->string("titulo");
            $table->text("descripcion");
            $table->string("autor");
            $table->float("precioCompra");
            $table->float("precioVenta");
            $table->integer("cantidadActual");
            $table->dateTime("fechaPublicacion");
            $table->float("descuento")->default(0);
            $table->boolean("estado");
        });

        Schema::create('libro_img', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("img");
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
        Schema::dropIfExists("libro_img");
        Schema::dropIfExists('libro');
    }
}
