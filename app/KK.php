<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    public $timestamps = false;
    protected $table = 'tb_lokasi';

    protected $fillable = [
       'nama_kk', 'jumlah_kk', 'lat', 'lng', 'photo', 'nim'
    ];
}
