<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'Motor';

    protected $fillable = array ('motor_kode','motor_merk ','motor_type','motor_warna_pilihan','motor_harga','motor_gambar');

    public function beli_kridit(){
        return $this->belongsTo('App\Beli_Kridit', 'motor_kode');
    }
    public function beli_cash(){
        return $this->belongsTo('App\Beli_Cash', 'motor_kode');
    }
}
