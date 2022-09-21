<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_product',
        'harga_product',
        'stok_product',
        'terjual',
        'gambar',
        'kategori_id',
        'deskripsi_product'

    ];

    public function Kategori(){
        return $this->belongsTo(kategori::class);
    }
}
