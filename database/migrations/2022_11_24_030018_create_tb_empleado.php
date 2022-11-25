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
        Schema::create('tb_empleado', function (Blueprint $table) {
            $table->id();
            $table ->string('nombre',60);
            $table ->string('ap_paterno',60);
            $table ->string('ap_materno',60);
            $table ->Integer('dni')->unique();
            $table ->BigInteger('ruc')->nullable()->unique();
            $table ->Integer('telefono');
            $table ->string('email')->unique();
            $table ->string('direccion',200);
            $table ->string('cargo',60);
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
        Schema::dropIfExists('tb_empleado');
    }
};
