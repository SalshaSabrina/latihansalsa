<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'Pembeli';

    protected $fillable = array ('pembeli_no_ktp','pembeli_nama','pembeli_alamat','pembeli_telepon','pembeli_Hp');

    public function beli_kridit(){
        return $this->belongsTo('App\Beli_Kridit', 'pembeli_no_ktp');
    }
    public function beli_cash(){
        return $this->belongsTo('App\Beli_Cash', 'pembeli_no_ktp');
    }
}
