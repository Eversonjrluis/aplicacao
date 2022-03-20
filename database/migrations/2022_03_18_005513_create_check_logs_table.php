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
        Schema::create('check_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('checklist_id')->nullable();
            $table->longText('pergunta');
            $table->longText('resposta');
            $table->integer('status_id');
            $table->integer('inspecao_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_logs');
    }
};
