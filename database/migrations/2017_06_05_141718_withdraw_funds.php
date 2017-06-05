<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WithdrawFunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraw_funds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('amount');
            $table->string('wallet_type');
            $table->string('wallet_number');
            $table->string('available_balance');
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
       Schema::dropIfExists('withdraw_funds');
    }
}
