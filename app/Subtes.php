<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtes extends Model
{
    protected $table = "tb_subtes";
    protected $primaryKey = "id_subtes";
    protected $fillable = ['id_subtes', 'id_tes', 'nama_subtes', 'jenis_subtes', 'petunjuk_subtes', 'waktu_subtes', 'jumlah_item'];
    public $timestamps = false;
    public function tes()
    {
        return $this->belongsTo(Tes::class, 'id_tes');
    }
}
