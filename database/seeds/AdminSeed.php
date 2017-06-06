<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
 
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
