<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suplier')->insert([
            [
                'id_suplier' => 1,
                'nama_suplier' => 'suplier A',
                'alamat_suplier' => '123 Main St, City A',
                'telepon_suplier' => '123-456-7890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_suplier' => 2,
                'nama_suplier' => 'suplier B',
                'alamat_suplier' => '456 Elm St, City B',
                'telepon_suplier' => '987-654-3210',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more supliers here
        ]);
    }
}