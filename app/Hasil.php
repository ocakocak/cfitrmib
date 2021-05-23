<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = "tb_hasil";
    protected $primaryKey = "id_hasil";
    protected $fillable = [
        'id_hasil', 'id_peserta', 'id_jadwal', 'id_tes', 'kesimpulan', 'tanggal_pemeriksaan', 'tanggal_hppkeluar', 'ttd_psikolog', 'sipp', 'ttd_direktur'
    ];
    public $timestamps = false;
    public function tes()
    {
        return $this->belongsTo(Tes::class, 'id_tes');
    }
    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
