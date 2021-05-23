<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = "tb_jawaban";
    protected $primaryKey = "id_jawaban";
    protected $fillable = ['id_jawaban', 'id_soal', 'id_tes', 'id_peserta', 'id_subtes', 'jawaban'];
    public $timestamps = false;
    public function soal()
    {
        return $this->belongsTo(Soal::class, 'id_soal');
    }
    public function tes()
    {
        return $this->belongsTo(Tes::class, 'id_tes');
    }
    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }
}
