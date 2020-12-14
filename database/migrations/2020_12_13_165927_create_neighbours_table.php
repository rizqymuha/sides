<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeighboursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neighbours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hamlet_id');
            $table->integer('number');
            $table->timestamps();

            $table->foreign('hamlet_id')->references('id')->on('hamlets')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neighbours');
    }
}
