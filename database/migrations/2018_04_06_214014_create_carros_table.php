<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->increments('id_carro');
            $table->string('marca');
            $table->string('modelo');
            $table->year('ano');
            $table->enum('cambio',['A','M']);
            $table->integer('portas');
            $table->char('combustivel', 20);
            $table->char('placa', 9)->unique();
            $table->char('cor', 8);
            $table->string('image', 200)->nullable;
            $table->string('opcionais');
            $table->char('tipo', 20);
            $table->float('diaria', 3,2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
