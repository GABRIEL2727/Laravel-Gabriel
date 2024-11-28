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
        // You can create multiple users here
        DB::table('user')->insert([
            [
                'id_user' => 123, // If you need this field
                'nama' => 'Gabriel', // Use 'nama' instead of 'name'
                'username' => 'Twinkle',
                'password' => bcrypt('password123'), // Always hash passwords
                'level' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2, // If you need this field
                'nama' => 'user2', // Use 'nama' instead of 'name'
                'username' => 'user2',
                'password' => bcrypt('password123'),
                'level' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}