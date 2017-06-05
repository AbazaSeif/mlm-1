<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddFunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_funds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('wallet_type');
            $table->string('wallet_number');
            $table->string('wallet_transection_number');
            $table->string('send_wallet_number');
            $table->string('image');
            $table->string('status')->comment('1=complete 2=pending');
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
        Schema::dropIfExists('add_funds');
    }
}
