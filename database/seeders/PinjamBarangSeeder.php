<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pinjam_barang')->insert([
            [
                'id' => 1, // ID of the record
                'id_pinjam' => 1, // Foreign key reference to the pinjam table
                'peminjam' => 'Gabriel', // Name of the person borrowing the item
                'tanggal_pinjam' => now()->toDateString(), // Current date or specific date
                'id_barang' => 1, // Foreign key reference to the barang table
                'nama_barang' => 'cimoy cimoy', // Name of the borrowed item
                'jml_barang' => 1, // Quantity of the item being borrowed
                'tgl_kembali' => now()->addDays(7)->toDateString(), // Return date after 7 days
                'kondisi' => 'Good', // Condition of the item being borrowed
                'created_at' => now(), // Current timestamp for created_at
                'updated_at' => now(), // Current timestamp for updated_at
            ],
            
        ]);
        
        [
            'id' => 1, // ID of the record
            'id_pinjam' => 1, // Foreign key reference to the pinjam table
            'peminjam' => 'Gabriel', // Name of the person borrowing the item
            'tanggal_pinjam' => now()->toDateString(), // Current date or specific date
            'id_barang' => 1, // Foreign key reference to the barang table
            'nama_barang' => 'cimoy cimoy', // Name of the borrowed item
            'jml_barang' => 1, // Quantity of the item being borrowed
            'tgl_kembali' => now()->addDays(7)->toDateString(), // Return date after 7 days
            'kondisi' => 'Good', // Condition of the item being borrowed
            'created_at' => now(), // Current timestamp for created_at
            'updated_at' => now(), // Current timestamp for updated_at
        
        ];
    }
}