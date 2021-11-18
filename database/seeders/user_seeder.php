<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>   'jatinder',
            'email' => 'jatinder@gmail.com'
            'role' => 'admin'
            'password'=>Hash::make('123456')
        ]);
    }
}
