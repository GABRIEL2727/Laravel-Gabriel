<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang' => 1, // Assuming barang with ID 1 exists
                'nama_barang' => 'Laptop',
                'tgl_masuk' => now()->toDateString(), // Current date
                'jml_masuk' => 10,
                'id_suplier' => 1, // Assuming supplier with ID 1 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2, // Assuming barang with ID 2 exists
                'nama_barang' => 'Proyektor',
                'tgl_masuk' => now()->toDateString(),
                'jml_masuk' => 5,
                'id_suplier' => 2, // Assuming supplier with ID 2 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more barang_masuk records here
        ]);
    }
}