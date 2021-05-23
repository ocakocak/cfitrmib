<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Klasifikasirs extends Model
{
    use Notifiable;
    protected $table = "tb_klasifikasirs";
    protected $primaryKey = "id_klasifikasirs";
    protected $fillable = ['id_klasifikasirs', 'raw_score', 'usia130_134', 'usia135_1311', 'usia140_1411', 'usia150_1511', 'usia160_1611', 'usia170_keatas'];
    public $timestamps = false;
}
