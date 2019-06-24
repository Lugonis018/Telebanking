<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Enterprises_id_from');
            $table->unsignedBigInteger('Enterprises_id_to');
            $table->unsignedDecimal('import_from',20,2);
            $table->unsignedDecimal('import_to',20,2);
            $table->unsignedBigInteger('Type_change_id');
            $table->timestamps();

            $table->foreign('Type_change_id')->references('id')->on('Type_change');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
