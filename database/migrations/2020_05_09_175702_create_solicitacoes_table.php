<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacoes', function (Blueprint $table) {
          $table->increments('id')->nullable(false);
          //$table->integer('user_id')->unsigned();
          //$table->foreign('user_id')->references('id')->onDelete('cascade');
          $table->string('namesolicitante', 50)->nullable(false);
          $table->string('nameramal', 50)->nullable(false);
          $table->string('nameroteiro', 100)->nullable(false);
          $table->string('namefinalidade', 150)->nullable(false);
          $table->date('datasaida')->nullable(false);
          $table->time('horasaida')->nullable(false);
          $table->date('dataretorno')->nullable(false);
          $table->time('horaretorno')->nullable(false);
          $table->string('autenticacao', 30)->nullable(false);
          $table->string('nameusuario', 50)->nullable(false);

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
        Schema::dropIfExists('solicitacoes');
    }
}
