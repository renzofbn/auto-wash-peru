<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_venta', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('id_servicio')->unsigned();
            $table->BigInteger('id_auto')->unsigned();
            $table->BigInteger('id_cliente')->unsigned();
            $table->BigInteger('id_e_supervisor')->unsigned();
            $table->BigInteger('id_e_operario1')->unsigned();
            $table->BigInteger('id_e_operario2')->unsigned();
            $table->BigInteger('id_e_operario3')->unsigned();
            $table->foreign('id_servicio')->references('id')->on('tb_servicio')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('tb_cliente')->onDelete('cascade');
            $table->foreign('id_e_supervisor')->references('id')->on('tb_cliente')->onDelete('cascade');
            $table->foreign('id_e_operario1')->references('id')->on('tb_cliente')->onDelete('cascade');
            $table->foreign('id_e_operario2')->references('id')->on('tb_cliente')->nullable()->onDelete('cascade');
            $table->foreign('id_e_operario3')->references('id')->on('tb_cliente')->nullable()->onDelete('cascade');
            $table->foreign('id_auto')->references('id')->on('tb_auto')->onDelete('cascade');
            $table->string('tipo_auto',50);
            $table->boolean('finalizado');
            $table->boolean('domicilio');
            $table->decimal('subtotal', 8, 2);
            $table->decimal('igv', 8, 2);
            $table->decimal('total', 8, 2);
            $table -> timestamp('fecha_ingreso');
            $table -> timestamp('fecha_entrega')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_venta');
    }
};
