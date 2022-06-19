<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                // 'id_user' => 121244551,
                'name' => 'Setyo Dwi Cahyo',
                'email' => 'admin@google.com',
                'password' => bcrypt('admin'),
                'created_at' => now(),
            ),
        ));

    }
}