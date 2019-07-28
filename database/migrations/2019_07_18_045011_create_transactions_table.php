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
            $table->unsignedBigInteger('userId');
            $table->string('type')->comment('buy, sell, exchange');
            $table->string('sendMethod');
            $table->string('recieveMethod');
            $table->float('givenAmount');
            $table->float('amount');
            $table->string('trnasID')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->integer('status')->default(0)->comment('0=requested, 1=completed');
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
        Schema::dropIfExists('transactions');
    }
}
