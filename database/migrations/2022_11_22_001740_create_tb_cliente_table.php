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
        Schema::create('tb_cliente', function (Blueprint $table) {
            $table->id();
            $table ->string('nombre',60);
            $table ->string('ap_paterno',60);
            $table ->string('ap_materno',60);
            $table ->string('direccion',100);
            $table ->string('email')->unique();
            $table ->Integer('dni')->unique();
            $table ->BigInteger('ruc')->nullable()->unique();
            $table ->Integer('telefono');
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
        Schema::dropIfExists('tb_cliente');
    }
};
