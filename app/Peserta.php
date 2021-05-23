<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Peserta extends Authenticatable
{
    use Notifiable;
    protected $table = "tb_peserta";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama_peserta', 'jeniskelamin_peserta', 'tempatlahir_peserta', 'tanggallahir_peserta', 'usia_tahun', 'usia_bulan', 'usia_hari', 'pendidikan_terakhir', 'pekerjaan', 'nohp_peserta', 'email_peserta', 'username', 'password'];
    public $timestamps = false;
    public function hasil()
    {
        return $this->hasMany(Peserta::class, 'id', 'id');
    }
}
