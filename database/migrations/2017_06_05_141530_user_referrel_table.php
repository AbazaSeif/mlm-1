<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserReferrelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_referrel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('new_user_id');
            $table->string('package_id');
            $table->string('package_price');
            $table->string('package_commission');
            $table->string('status')->comment('1=active 2=inactive');
            $table->string('user_position')->comment('1=left 2=right');
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
        Schema::dropIfExists('user_referrel');
    }
}
