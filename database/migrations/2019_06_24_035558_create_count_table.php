<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Type_of_count_id');
            $table->integer('number');
            $table->unsignedDecimal('mount',20,2);
            $table->timestamps();


            $table->foreign('Type_of_count_id')->references('id')->on('Type_of_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('count');
    }
}
