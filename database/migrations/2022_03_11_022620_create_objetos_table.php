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
        Schema::create('objetos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('tipo_objetos_id');
            $table->string('descricao');
            $table->string('obs')->nullable();
            $table->integer('validade')->nullable();
            $table->string('capacidade')->nullable();
            $table->string('un')->nullable();
            $table->string('class')->nullable();
            $table->string('neblina')->nullable();
            $table->string('solido')->nullable();
            $table->string('storz')->nullable();
            $table->integer('locais_id')->nullable();
            $table->integer('responsavel_id')->nullable();
            $table->string('data_disp')->nullable();
            $table->string('data_validade')->nullable();
            $table->integer('status_id')->nullable();
            $table->string('ativo')->nullable();
            $table->string('cod_barra')->nullable();
            $table->string('qr_code')->nullable();
            $table->integer('qtd_mangueiras')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetos');
    }
};
