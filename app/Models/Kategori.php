<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','id'
    ];

    public function product(){
        // eloquent
        return $this->hasMany(product::class);
    }
}
