<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Peserta;
use Illuminate\Http\Request;
use App\Soal;
use App\Subtes;
use App\Tes;

class SoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('peserta');
    }
    public function lihat(Request $request, Peserta $peserta)
    {
        $input = $request->inputan;
        // $waktusubtes1cfit = Subtes::select('waktu_subtes')->where('id_subtes', 11)->get();
        // $waktusubtes2cfit = Subtes::select('waktu_subtes')->where('id_subtes', 12)->get();
        // $waktusubtes3cfit = Subtes::select('waktu_subtes')->where('id_subtes', 13)->get();
        // $waktusubtes4cfit = Subtes::select('waktu_subtes')->where('id_subtes', 14)->get();
        $data_jadwal = Jadwal::where('id_jadwal', $request->id_jadwal)->where('id_peserta', $peserta->id)->first();
        if ($data_jadwal->status_ujian == 1) {
            if ($input = $data_jadwal->token) {
                // $data_jadwal->status_ujian = 2;
                // $data_jadwal->save();
                $ujian = $data_jadwal->id_tes;
                $data_tes = Tes::all();
                $data_soal = Soal::where('id_tes', $ujian)->get();
                $data_peserta = Peserta::where('id', $peserta->id)->first();
                if ($ujian == 1) {
                    if ($data_peserta->jeniskelamin_peserta == 'Laki-laki') {
                        $var = "RMIB KELOMPOK A";
                        $a = Soal::where('id_subtes', 1)->where('jenis_kelamin', $data_peserta->jeniskelamin_peserta)->get();
                        $petunjuk = Subtes::where('id_subtes', 1)->first();
                        return view('peserta.soalrmib.ujianl', compact("a", "var", "petunjuk"));
                    } elseif ($data_peserta->jeniskelamin_peserta == 'Wanita') {
                        $var = "RMIB KELOMPOK A";
                        $a = Soal::where('id_subtes', 1)->where('jenis_kelamin', $data_peserta->jeniskelamin_peserta)->get();
                        $petunjuk = Subtes::where('id_subtes', 1)->first();
                        return view('peserta.soalrmib.ujianp', compact("a", "var", "petunjuk"));
                    }
                } elseif ($ujian == 2) {
                    $var = 1;
                    $sub1 = Soal::where('id_subtes', 11)->get();
                    $petunjuk = Subtes::where('id_subtes', 11)->first();
                    return view('peserta.soalcfit.petunjuk', compact("sub1", "petunjuk", "var"));
                }
            }
        } elseif ($data_jadwal->status_ujian == 2) {
            echo "Anda sudah mengikuti ujian";
        }
    }

    public function pindahsoal($id_subtes, Peserta $peserta)
    {
        $sub1 = Soal::where('id_subtes', $id_subtes)->get();
        $waktu = Subtes::select('waktu_subtes')->where('id_subtes', $id_subtes)->first();
        if ($id_subtes == 11) {
            $var = 1;
        } elseif ($id_subtes == 12) {
            $var = 2;
        } elseif ($id_subtes == 13) {
            $var = 3;
        } elseif ($id_subtes == 14) {
            $var = 4;
        }
        return view('peserta.soalcfit.ujiansub1', compact("sub1", "waktu", "var"));
    }
}
