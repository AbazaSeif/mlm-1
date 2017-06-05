<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('bank_holder_name');
            $table->string('bank_account');
            $table->string('bank_name');
            $table->string('bank_brance');
            $table->string('bkash_number');
            $table->string('rocket_number');
            $table->string('mkash');
            $table->string('ucash');
            $table->string('status')->comment('1=active 2=pending');
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
        Schema::dropIfExists('wallet_table');
    }
}
