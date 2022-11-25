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
            $table->BigInteger('servicio')->unsigned();
            $table->BigInteger('auto')->unsigned();
            $table->BigInteger('cliente')->unsigned();
            $table->BigInteger('e_supervisor')->unsigned();
            $table->BigInteger('e_operario1')->unsigned();
            $table->BigInteger('e_operario2')->unsigned();
            $table->BigInteger('e_operario3')->unsigned();
            $table->foreign('servicio')->references('id')->on('tb_servicio')->onDelete('cascade');
            $table->foreign('cliente')->references('id')->on('tb_cliente')->onDelete('cascade');
            $table->foreign('e_supervisor')->references('id')->on('tb_cliente')->onDelete('cascade');
            $table->foreign('e_operario1')->references('id')->on('tb_cliente')->onDelete('cascade');
            $table->foreign('e_operario2')->references('id')->on('tb_cliente')->nullable()->onDelete('cascade');
            $table->foreign('e_operario3')->references('id')->on('tb_cliente')->nullable()->onDelete('cascade');
            $table->foreign('auto')->references('id')->on('tb_auto')->onDelete('cascade');
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
