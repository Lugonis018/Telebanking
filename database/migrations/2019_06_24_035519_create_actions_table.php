<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->date('fecha_action');
            $table->unsignedBigInteger('manage_Users_id');
            $table->unsignedBigInteger('manage_Enterprises_id');
            $table->timestamps();

            $table->foreign('manage_Users_id')->references('Users_id')->on('Manage');
            $table->foreign('manage_Enterprises_id')->references('Enterprises_id')->on('Manage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actions');
    }
}
