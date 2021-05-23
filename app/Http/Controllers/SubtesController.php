<?php

namespace App\Http\Controllers;

use App\Subtes;
use App\Soal;
use App\Peserta;
use Illuminate\Http\Request;

class SubtesController extends Controller
{
    public function lihatpetunjuk($x, Peserta $peserta)
    {
        $data_petunjuk = Subtes::where('id_subtes', $x)->first();
        return view('peserta.soalcfit.petunjuk', compact("data_petunjuk"));
    }
}
