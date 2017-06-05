<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('date_of_birth');
            $table->string('nid_no');
            $table->string('religion');
            $table->string('sex');
            $table->string('spouse_name');
            $table->string('contact_number');
            $table->string('mobile_number');
            $table->string('nominee');
            $table->string('nominee_relation');
            
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
       Schema::dropIfExists('user_profiles');
    }
}
