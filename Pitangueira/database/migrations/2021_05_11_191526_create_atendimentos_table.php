<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_exec');
            $table->string('observacao')->nullable();

            $table->bigInteger('tipoAtendimento_id')->unsigned();
            $table->foreign('tipoAtendimento_id')->references('id')->on('tipo_atendimentos')->onDelete('set null');

            $table->bigInteger('client_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->on('clientes')->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('atendimentos');
    }
}
