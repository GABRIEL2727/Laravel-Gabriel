<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'spesifikasi' => 'Intel Core i5, 8GB RAM',
                'lokasi' => 'Ruang 101',
                'kondisi' => 'Baik',
                'jumlah_barang' => 10,
                'sumber_dana' => 'APBN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Proyektor',
                'spesifikasi' => 'HD 1080p',
                'lokasi' => 'Ruang 102',
                'kondisi' => 'Baik',
                'jumlah_barang' => 5,
                'sumber_dana' => 'APBD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more barang here
        ]);
    }
}