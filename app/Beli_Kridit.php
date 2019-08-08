<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli_Kridit extends Model
{
    protected $table = 'Beli_Kridit';

    protected $fillable = array ('kridit_kode','pembeli_no_ktp','paket_kode','motor_kode','kridit_tanggal','fotocopy_KTP','fotocopy_KK','fotocopy_slip_gaji');

    public function bayar_cicilan(){
        return $this->belongsTo('App\Bayar_Cicilan', 'kridit_kode');
    }
    public function pembeli(){
        return $this->hasMany('App\Pembeli', 'pembeli_no_ktp');
    }
    public function kridit_paket(){
        return $this->hasMany('App\Kridit_Paket', 'paket_kode');
    }
    public function motor(){
        return $this->hasMany('App\Motor', 'motor_kode');
    }
}
