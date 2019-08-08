<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli_Cash extends Model
{
    protected $table = 'Beli_Cash';

    protected $fillable = array ('cash_kode','pembeli_no_ktp','motor_kode','cash_tanggal','cash_bayar');

    public function Pembeli(){
        return $this->hasMany('App\Pembeli', 'pembeli_no_ktp');
    }
    
    public function motor(){
        return $this->hasMany('App\Motor', 'motor_kode');
    }
}
