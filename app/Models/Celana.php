<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celana extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ukuran',
        'stok',
        'harga',
        'gambar'
    ];
}
