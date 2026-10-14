<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanans extends Model

{
    protected $fillable =[
        'id','kode_layanans','nama_layanan',
        'jenis', 'tarif_per_satuan'
    ];
}
