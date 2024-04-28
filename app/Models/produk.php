<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['kode_produk', 'nama_produk', 'jenis_produk', 'harga_produk'];
    protected $table = 'produk';
}
