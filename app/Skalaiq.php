<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skalaiq extends Model
{
    protected $table = "tb_skalaiq";
    protected $primaryKey = "id_skalaiq";
    protected $fillable = ['id_skalaiq', 'deviasi_iq', 'klasifikasi_iq'];
    public $timestamps = false;
    public function totaljawaban()
    {
        return $this->hasMany(Skalaiq::class, 'id_skalaiq', 'id_skalaiq');
    }
}
