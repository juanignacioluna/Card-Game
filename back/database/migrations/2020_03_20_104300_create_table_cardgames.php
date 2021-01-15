<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCardgames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardgames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('playerName');
            $table->integer('playerHP');
            $table->integer('playerShield');
            $table->integer('enemyHP');
            $table->integer('enemyShield');
            $table->integer('turns');
            $table->integer('cardSalud');
            $table->integer('cardAtaque');
            $table->integer('cardShield');
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
        Schema::dropIfExists('cardgames');
    }
}
