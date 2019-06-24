<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage', function (Blueprint $table) {
            $table->unsignedBigInteger('Users_id');
            $table->unsignedBigInteger('Enterprises_id');
            $table->timestamps();
            $table->foreign('Users_id')->references('id')->on('Users');
            $table->foreign('Enterprises_id')->references('id')->on('Enterprises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage');
    }
}
