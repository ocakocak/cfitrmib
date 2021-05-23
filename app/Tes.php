<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tes extends Model
{
    protected $table = "tb_tes";
    protected $primaryKey = "id_tes";
    protected $fillable = ['id_tes', 'nama_tes', 'tujuan_tes', 'jenis_tes'];
    public $timestamps = false;
    public function soal()
    {
        return $this->hasMany(Tes::class, 'id_tes', 'id_tes');
    }
    public function jadwal()
    {
        return $this->hasMany(Tes::class, 'id_tes', 'id_tes');
    }
}
