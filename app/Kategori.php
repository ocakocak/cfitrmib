<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "tb_kategori";
    protected $primaryKey = "id_kategori";
    protected $fillable = ['id_kategori', 'id_tes', 'nama_kategori', 'keterangan_kategori', 'saran_pekerjaan', 'jenis_kelamin'];
    public $timestamps = false;
    public function tes()
    {
        return $this->belongsTo(Tes::class, 'id_tes');
    }
    public function totaljawaban()
    {
        return $this->hasMany(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
