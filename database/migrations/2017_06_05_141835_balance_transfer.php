<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalanceTransfer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('transfer_number');
            $table->string('pin_number');
            $table->string('transfer_user_id');
            $table->string('amount');
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
        Schema::dropIfExists('balance_transfers');
    }
}
