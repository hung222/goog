<?php

use Illuminate\Database\Seeder;

class tgh.php extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        DB::table('tgh')->insert([
            'name' => str_random(10),hung
            'email' => str_random(10).'shimojuju@gmail.com',
            'password' => bcrypt('secret'),mnbvcxz
        ]);
    }
}