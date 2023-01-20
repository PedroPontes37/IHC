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
        Schema::create('carrinho', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('recolha');
            $table->date('devolucao');
            $table->bigInteger('carro')->unsigned()->default(1);
            $table->foreign('carro')->references('id')->on('carros');
            $table->bigInteger('user')->unsigned()->default(1);
            $table->foreign('user')->references('id')->on('users');
            $table->boolean('IsBuyed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrinho');
    }
};
