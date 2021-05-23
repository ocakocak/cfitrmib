<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "tb_jadwal";
    protected $primaryKey = "id_jadwal";
    protected $fillable = ['id_jadwal', 'id_tes', 'id_peserta', 'tanggal_tes', 'jam_mulai', 'token', 'status_ujian'];
    public $timestamps = false;
    public function tes()
    {
        return $this->belongsTo(Tes::class, 'id_tes');
    }
    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }
    public function hasil()
    {
        return $this->hasMany(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
