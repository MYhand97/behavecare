<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'nama',
        'harga',
        'harga_paket',
        'full_ket',
        'short_ket',
        'alamat',
        'gmaps',
        'file_path',
    ];
}
