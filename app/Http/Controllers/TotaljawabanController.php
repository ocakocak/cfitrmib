<?php

namespace App\Http\Controllers;

use App\Hasil;
use App\Jadwal;
use App\Jawaban;
use App\Peserta;
use App\Soal;
use App\Totaljawaban;
use Illuminate\Http\Request;

class TotaljawabanController extends Controller
{
    public function simpantotaljawaban(Request $request, Peserta $peserta)
    {
        $x = $request->id_subtes + 1;
        $data_peserta = Peserta::where('id', $peserta->id)->firsSt();
        if ($request->id_tes == 1) {
            if ($data_peserta->jeniskelamin_peserta == 'Laki-laki') {
                $data_jawaban1 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 1)->get();
                $data_jawaban2 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 2)->get();
                $data_jawaban3 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 3)->get();
                $data_jawaban4 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 4)->get();
                $data_jawaban5 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 5)->get();
                $data_jawaban6 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 6)->get();
                $data_jawaban7 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 7)->get();
                $data_jawaban8 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 8)->get();
                $data_jawaban9 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 9)->get();
                foreach ($data_jawaban1 as $dj1) {
                    $x = $dj1->jawaban;
                    $int = (int)$x;
                    $d1[] = $int;
                }
                foreach ($data_jawaban2 as $dj2) {
                    $x = $dj2->jawaban;
                    $int = (int)$x;
                    $d2[] = $int;
                }
                foreach ($data_jawaban3 as $dj3) {
                    $x = $dj3->jawaban;
                    $int = (int)$x;
                    $d3[] = $int;
                }
                foreach ($data_jawaban4 as $dj4) {
                    $x = $dj4->jawaban;
                    $int = (int)$x;
                    $d4[] = $int;
                }
                foreach ($data_jawaban5 as $dj5) {
                    $x = $dj5->jawaban;
                    $int = (int)$x;
                    $d5[] = $int;
                }
                foreach ($data_jawaban6 as $dj6) {
                    $x = $dj6->jawaban;
                    $int = (int)$x;
                    $d6[] = $int;
                }
                foreach ($data_jawaban7 as $dj7) {
                    $x = $dj7->jawaban;
                    $int = (int)$x;
                    $d7[] = $int;
                }
                foreach ($data_jawaban8 as $dj8) {
                    $x = $dj8->jawaban;
                    $int = (int)$x;
                    $d8[] = $int;
                }
                foreach ($data_jawaban9 as $dj9) {
                    $x = $dj9->jawaban;
                    $int = (int)$x;
                    $d9[] = $int;
                }
                $out = $d1[0] + $d2[11] + $d3[10] + $d4[9] + $d5[8] + $d6[7] + $d7[6] + $d8[5] + $d9[4];
                $mec = $d1[1] + $d2[0] + $d3[11] + $d4[10] + $d5[9] + $d6[8] + $d7[7] + $d8[6] + $d9[5];
                $com = $d1[2] + $d2[1] + $d3[0] + $d4[11] + $d5[10] + $d6[9] + $d7[8] + $d8[7] + $d9[6];
                $sci = $d1[3] + $d2[2] + $d3[1] + $d4[0] + $d5[11] + $d6[10] + $d7[9] + $d8[8] + $d9[7];
                $per = $d1[4] + $d2[3] + $d3[2] + $d4[1] + $d5[0] + $d6[11] + $d7[10] + $d8[9] + $d9[8];
                $aes = $d1[5] + $d2[4] + $d3[3] + $d4[2] + $d5[1] + $d6[0] + $d7[11] + $d8[10] + $d9[9];
                $lit = $d1[6] + $d2[5] + $d3[4] + $d4[3] + $d5[2] + $d6[1] + $d7[0] + $d8[11] + $d9[10];
                $mus = $d1[7] + $d2[6] + $d3[5] + $d4[4] + $d5[3] + $d6[2] + $d7[1] + $d8[0] + $d9[11];
                $sos = $d1[8] + $d2[7] + $d3[6] + $d4[5] + $d5[4] + $d6[3] + $d7[2] + $d8[1] + $d9[0];
                $cle = $d1[9] + $d2[8] + $d3[7] + $d4[6] + $d5[5] + $d6[4] + $d7[3] + $d8[2] + $d9[1];
                $pra = $d1[10] + $d2[9] + $d3[8] + $d4[7] + $d5[6] + $d6[5] + $d7[4] + $d8[3] + $d9[2];
                $med = $d1[11] + $d2[10] + $d3[9] + $d4[8] + $d5[7] + $d6[6] + $d7[5] + $d8[4] + $d9[3];
                $tj = [1 => $out, 3 => $mec, 5 => $com, 7 => $sci, 9 => $per, 11 => $aes, 13 => $lit, 15 => $mus, 17 => $sos, 19 => $cle, 21 => $pra, 23 => $med];
                asort($tj, SORT_NUMERIC);
                $y = array_slice($tj, 0, 3, true);
                foreach ($y as $key => $value) {
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => $request->id_tes,
                        'id_peserta' => $peserta->id_peserta,
                        'id_kategori' => $key,
                        'total_jawaban' => $value,
                    ]);
                    $hsl = Totaljawaban::where('id_peserta', $peserta->id)->get();
                    $jd = Jadwal::where('id_peserta', $peserta->id)->first();
                    Hasil::create([
                        'id_hasil' => count(Hasil::all()) + 1,
                        'id_peserta' => $peserta->id,
                        'id_jadwal' => $jd->id_jadwal,
                        'id_tes' => $request->id_tes,
                        'id_peserta' => $peserta->id_peserta,
                        'tanggal_pemeriksaan' => $jd->tanggal_tes,
                    ]);
                }
            } elseif ($data_peserta->jeniskelamin_peserta == 'Wanita') {
                $data_jawaban1 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 1)->get();
                $data_jawaban2 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 2)->get();
                $data_jawaban3 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 3)->get();
                $data_jawaban4 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 4)->get();
                $data_jawaban5 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 5)->get();
                $data_jawaban6 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 6)->get();
                $data_jawaban7 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 7)->get();
                $data_jawaban8 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 8)->get();
                $data_jawaban9 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 9)->get();
                foreach ($data_jawaban1 as $dj1) {
                    $x = $dj1->jawaban;
                    $int = (int)$x;
                    $d1[] = $int;
                }
                foreach ($data_jawaban2 as $dj2) {
                    $x = $dj2->jawaban;
                    $int = (int)$x;
                    $d2[] = $int;
                }
                foreach ($data_jawaban3 as $dj3) {
                    $x = $dj3->jawaban;
                    $int = (int)$x;
                    $d3[] = $int;
                }
                foreach ($data_jawaban4 as $dj4) {
                    $x = $dj4->jawaban;
                    $int = (int)$x;
                    $d4[] = $int;
                }
                foreach ($data_jawaban5 as $dj5) {
                    $x = $dj5->jawaban;
                    $int = (int)$x;
                    $d5[] = $int;
                }
                foreach ($data_jawaban6 as $dj6) {
                    $x = $dj6->jawaban;
                    $int = (int)$x;
                    $d6[] = $int;
                }
                foreach ($data_jawaban7 as $dj7) {
                    $x = $dj7->jawaban;
                    $int = (int)$x;
                    $d7[] = $int;
                }
                foreach ($data_jawaban8 as $dj8) {
                    $x = $dj8->jawaban;
                    $int = (int)$x;
                    $d8[] = $int;
                }
                foreach ($data_jawaban9 as $dj9) {
                    $x = $dj9->jawaban;
                    $int = (int)$x;
                    $d9[] = $int;
                }
                $out = $d1[0] + $d2[11] + $d3[10] + $d4[9] + $d5[8] + $d6[7] + $d7[6] + $d8[5] + $d9[4];
                $mec = $d1[1] + $d2[0] + $d3[11] + $d4[10] + $d5[9] + $d6[8] + $d7[7] + $d8[6] + $d9[5];
                $com = $d1[2] + $d2[1] + $d3[0] + $d4[11] + $d5[10] + $d6[9] + $d7[8] + $d8[7] + $d9[6];
                $sci = $d1[3] + $d2[2] + $d3[1] + $d4[0] + $d5[11] + $d6[10] + $d7[9] + $d8[8] + $d9[7];
                $per = $d1[4] + $d2[3] + $d3[2] + $d4[1] + $d5[0] + $d6[11] + $d7[10] + $d8[9] + $d9[8];
                $aes = $d1[5] + $d2[4] + $d3[3] + $d4[2] + $d5[1] + $d6[0] + $d7[11] + $d8[10] + $d9[9];
                $lit = $d1[6] + $d2[5] + $d3[4] + $d4[3] + $d5[2] + $d6[1] + $d7[0] + $d8[11] + $d9[10];
                $mus = $d1[7] + $d2[6] + $d3[5] + $d4[4] + $d5[3] + $d6[2] + $d7[1] + $d8[0] + $d9[11];
                $sos = $d1[8] + $d2[7] + $d3[6] + $d4[5] + $d5[4] + $d6[3] + $d7[2] + $d8[1] + $d9[0];
                $cle = $d1[9] + $d2[8] + $d3[7] + $d4[6] + $d5[5] + $d6[4] + $d7[3] + $d8[2] + $d9[1];
                $pra = $d1[10] + $d2[9] + $d3[8] + $d4[7] + $d5[6] + $d6[5] + $d7[4] + $d8[3] + $d9[2];
                $med = $d1[11] + $d2[10] + $d3[9] + $d4[8] + $d5[7] + $d6[6] + $d7[5] + $d8[4] + $d9[3];
                $tj = [2 => $out, 4 => $mec, 6 => $com, 8 => $sci, 10 => $per, 12 => $aes, 14 => $lit, 16 => $mus, 18 => $sos, 20 => $cle, 22 => $pra, 24 => $med];
                asort($tj, SORT_NUMERIC);
                $y = array_slice($tj, 0, 3, true);
                foreach ($y as $key => $value) {
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => $request->id_tes,
                        'id_peserta' => $peserta->id_peserta,
                        'id_kategori' => $key,
                        'total_jawaban' => $value,
                    ]);
                    $hsl = Totaljawaban::where('id_peserta', $peserta->id)->get();
                    $jd = Jadwal::where('id_peserta', $peserta->id)->first();
                    Hasil::create([
                        'id_hasil' => count(Hasil::all()) + 1,
                        'id_peserta' => $peserta->id,
                        'id_jadwal' => $jd->id_jadwal,
                        'id_tes' => $request->id_tes,
                        'id_peserta' => $peserta->id_peserta,
                        'tanggal_pemeriksaan' => $jd->tanggal_tes,
                    ]);
                }
            } elseif ($request->id_tes == 2) {
                if ($x > 10 && $x < 14) {
                    $sub1 = Soal::where('id_subtes', $x)->get();
                    return view('peserta.soalcfit.ujiancfit', compact("sub1"));
                } elseif ($x == 14) {
                    $data_jawaban1 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 11)->get();
                    $data_soal1 = Soal::where('id_soal', $data_jawaban1->id_soal)->where('id_subtes', 11)->get();
                    $data_jawaban2 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 12)->get();
                    $data_jawaban3 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 13)->get();
                    $data_jawaban4 = Jawaban::where('id_peserta', $peserta->id)->where('id_subtes', 14)->get();
                    foreach ($data_jawaban1 as $dj1) {
                    }
                    $d1[] = [$dj1->id_soal, $dj1->jawaban];
                }
                dd($d1);
            }
        }
    }
}
