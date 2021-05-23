<?php

namespace App\Http\Controllers;

use App\Hasil;
use App\Jadwal;
use App\Peserta;
use App\Tes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function indexpegawai()
    {
        for ($i = 1; $i <= 12; $i++) {
            $jadwal = Jadwal::select('id_peserta', 'tanggal_tes')->where(Jadwal::raw('MONTH(tanggal_tes)'), Carbon::createFromFormat('m', $i)->month)
                ->get();
            $hasil = Hasil::select('id_hasil', 'tanggal_hppkeluar')->where(Hasil::raw('MONTH(tanggal_hppkeluar)'), Carbon::createFromFormat('m', $i)->month)
                ->get();
            foreach ($jadwal as $p) {
                if ($i == 1) {
                    $categories[] = "Januari";
                } elseif ($i == 2) {
                    $categories[] = "Februari";
                } elseif ($i == 3) {
                    $categories[] = "Maret";
                } elseif ($i == 4) {
                    $categories[] = "April";
                } elseif ($i == 5) {
                    $categories[] = "Mei";
                } elseif ($i == 6) {
                    $categories[] = "Juni";
                } elseif ($i == 7) {
                    $categories[] = "Juli";
                } elseif ($i == 8) {
                    $categories[] = "Agustus";
                } elseif ($i == 9) {
                    $categories[] = "September";
                } elseif ($i == 10) {
                    $categories[] = "Oktober";
                } elseif ($i == 11) {
                    $categories[] = "November";
                } elseif ($i == 12) {
                    $categories[] = "Desember";
                }
                $data[] = count($jadwal);
            }
            foreach ($hasil as $h) {
                if ($i == 1) {
                    $categories2[] = "Januari";
                } elseif ($i == 2) {
                    $categories2[] = "Februari";
                } elseif ($i == 3) {
                    $categories2[] = "Maret";
                } elseif ($i == 4) {
                    $categories2[] = "April";
                } elseif ($i == 5) {
                    $categories2[] = "Mei";
                } elseif ($i == 6) {
                    $categories2[] = "Juni";
                } elseif ($i == 7) {
                    $categories2[] = "Juli";
                } elseif ($i == 8) {
                    $categories2[] = "Agustus";
                } elseif ($i == 9) {
                    $categories2[] = "September";
                } elseif ($i == 10) {
                    $categories2[] = "Oktober";
                } elseif ($i == 11) {
                    $categories2[] = "November";
                } elseif ($i == 12) {
                    $categories2[] = "Desember";
                }
                $data2[] = count($hasil);
            }
        }
        return view('charts', compact('categories', 'data', 'categories2', 'data2'));
    }
    public function indexpeserta()
    {
        $tesrmib = Tes::where('id_tes', 1)->first();
        $tescfit = Tes::where('id_tes', 2)->first();
        return view('peserta.dashboard', ['tesrmib' => $tesrmib], ['tescfit' => $tescfit]);
    }
}
