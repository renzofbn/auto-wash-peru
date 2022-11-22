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
        Schema::create('tb_servicio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('nombre_servicio',100);
            $table->String('descripcion_servicio',150)->nullable();
            $table->decimal('precio_base',8,2);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_servicio');
    }
};
