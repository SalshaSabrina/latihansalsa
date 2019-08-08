<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayar_Cicilan extends Model
{
    protected $table = 'Bayar_Cicilan';

    protected $fillable = array ('cicilan_kode','kridit_kode','cicilan_tanggal','cicilan_jumlah','cicilan_ke','cicilan_sisa_ke','cicilan_sisa_harga');

    public function beli_kridit(){
        return $this->hasMany('App\Beli_Kridit', 'kridit_kode');
    }
}
