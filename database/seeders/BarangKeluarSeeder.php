<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_keluar')->insert([
            [
                'id_barang' => 1, // Assuming barang with ID 1 exists
                'nama_barang' => 'Laptop',
                'tgl_keluar' => now()->toDateString(), // Current date
                'jml_keluar' => 2,
                'lokasi' => 'Ruang Meeting',
                'penerima' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2, // Assuming barang with ID 2 exists
                'nama_barang' => 'Proyektor',
                'tgl_keluar' => now()->toDateString(),
                'jml_keluar' => 1,
                'lokasi' => 'Ruang Kelas',
                'penerima' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // You can add more barang_keluar records here
        ]);
    }
}