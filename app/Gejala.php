<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $table = 'gejala';
    protected $fillable = ['kode', 'nama'];

    public function penyakit() {
        return $this->belongsToMany('App\Penyakit', 'aturan');
    }
}
