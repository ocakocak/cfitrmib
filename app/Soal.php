<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = "tb_soal";
    protected $primaryKey = "id_soal";
    protected $fillable = ['id_soal', 'id_tes', 'id_subtes', 'pertanyaan', 'jenis_kelamin', 'pilgan_a', 'pilgan_b', 'pilgan_c', 'pilgan_d', 'pilgan_e', 'pilgan_f', 'kunci_jawaban', 'bobot'];
    public $timestamps = false;
    public function tes()
    {
        return $this->belongsTo(Tes::class, 'id_tes');
    }
    public function subtes()
    {
        return $this->belongsTo(Subtes::class, 'id_subtes');
    }
}
