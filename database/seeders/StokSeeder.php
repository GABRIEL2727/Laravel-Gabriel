<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stok')->insert([
            [
                'id_barang' => 1, // Assuming barang with ID 1 exists
                'nama_barang' => 'Laptop',
                'jml_masuk' => 10,
                'jml_keluar' => 2,
                'total_barang' => 8, // Total after keluar
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2, // Assuming barang with ID 2 exists
                'nama_barang' => 'Proyektor',
                'jml_masuk' => 5,
                'jml_keluar' => 1,
                'total_barang' => 4, // Total after keluar
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more stok records here
        ]);
    }
}