<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pesanans extends Model
{
        protected $fillable =[
        'id','layanan_id','nama_pelanggan','tanggal_masuk','jumlah',
        'total_biaya','status'
        ];
}
