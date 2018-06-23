<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            // Cliente PF
            $table->string('nome', 200);
            $table->char('cpf', 11)->unique();
            $table->date('dtnasc');
            $table->char('rg', 8);
            $table->char('cnh', 11);
            $table->enum('sexo',['H','M']);
            // Cliente PJ
            $table->char('cnpj', 14)->unique();
            $table->integer('numIe')->unique();
            $table->integer('numIm')->unique();
            $table->string('razsoc');
            $table->string('fantasia');
            $table->string('email')->unique();
            $table->char('telefone', 11);
            // Endereço Cliente
            $table->string('pais', 100);
            $table->string('uf', 100);
            $table->string('cidade', 100);
            $table->string('bairro', 100);
            $table->string('cep', 8);
            $table->string('logradouro', 200);
            $table->integer('num');
            $table->string('image', 200)->nullable;
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
        Schema::dropIfExists('clientes');
    }
}
