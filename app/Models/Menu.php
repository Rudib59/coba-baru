<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nama_menu',
        'jenis',
        'harga',
    ];

    public function pesanan()
    {
        return $this->belongsTo(pesanan::class);
    }
}
