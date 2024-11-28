<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pinjam_barang extends Model
{
    protected $table = 'pinjam_barang';
    protected $fillable =   ["id_pinjam","peminjam","tanggal_pinjam","id_barang","nama_barang","jml_barang","tgl_kembali","kondisi"];
}