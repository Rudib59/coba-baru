<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'menu_id',
        'nama_pelanggan',
        'nomor_meja',
        'jumlah',
        'total_harga',
        'status',
    ];
}
