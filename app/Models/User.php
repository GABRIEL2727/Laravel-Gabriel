<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory; // Tambahkan ini

    protected $table = 'user';
    protected $fillable = ["id_user", "nama", "username", "password", "level"];
}


