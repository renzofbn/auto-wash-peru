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
            $table->foreign('id_servicio')->references('id')->on('tb_servicio');
            $table->foreign('id_cliente')->references('id')->on('tb_cliente');
            $table->foreign('id_e_supervisor')->references('id')->on('tb_empleado');
            $table->foreign('id_e_operario1')->references('id')->on('tb_empleado');
            $table->foreign('id_e_operario2')->references('id')->on('tb_empleado')->nullable();
            $table->foreign('id_e_operario3')->references('id')->on('tb_empleado')->nullable();
            $table->foreign('id_auto')->references('id')->on('tb_auto')->onDelete('cascade');
            $table->tinyInteger('tipo_auto')->comment('0: Auto, 1: Camioneta, 2: Minivan, 3:Van');
            $table->boolean('finalizado')->default(0);
            $table->boolean('domicilio')->default(0);
            $table->decimal('subtotal', 8, 2)->default(0);
            $table->decimal('igv', 8, 2)->default(0);
            $table->decimal('total', 8, 2)->default(0);
            $table -> timestamp('fecha_ingreso');
            $table -> dateTime('fecha_entrega');
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
