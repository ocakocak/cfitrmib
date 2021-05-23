<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Totaljawaban extends Model
{
    protected $table = "tb_totaljawaban";
    protected $primaryKey = "id_totaljawaban";
    protected $fillable = ['id_totaljawaban', 'id_tes', 'id_kategori', 'id_skalaiq', 'id_peserta', 'total_jawaban'];
    public $timestamps = false;
    public function tes()
    {
        return $this->belongsTo(Tes::class, 'id_tes');
    }
    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function skalaiq()
    {
        return $this->belongsTo(Skalaiq::class, 'id_skalaiq');
    }
}
