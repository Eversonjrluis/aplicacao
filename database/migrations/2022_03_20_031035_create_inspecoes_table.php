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
        Schema::create('inspecoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->integer('objetos_id');
            $table->string('dt_programado')->nullable();
            $table->string('dt_efetuado')->nullable();
            $table->integer('status_id');
            $table->integer('n_cilindro')->nullable();
            $table->string('tipo')->nullable();
            $table->longText('obs')->nullable();
            $table->integer('locais_id');
            $table->integer('ativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspecoes');
    }
};
