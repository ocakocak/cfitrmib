<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pegawai extends Authenticatable
{
    use Notifiable;
    protected $table = "tb_pegawai";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'username', 'password', 'nama_pegawai', 'jabatan_pegawai', 'sipp'];
    public $timestamps = false;
}
