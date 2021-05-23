<?php

namespace App\Http\Controllers;

use App\Hasil;
use App\Jadwal;
use App\Jawaban;
use App\Klasifikasirs;
use App\Peserta;
use App\Skalaiq;
use App\Soal;
use App\Subtes;
use App\Totaljawaban;
use DateTime;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class JawabanController extends Controller
{
    public function simpanjawaban(Request $request, Peserta $peserta)
    {
        if ($request->id_subtes == 12) {
            foreach ($request->jawaban1 as $key => $value) {
                $key1 = $key;
                $value1 = $value;
                foreach ($request->jawaban2 as $key => $value) {
                    $key2 = $key;
                    $value2 = $value;
                    if ($key2 = $key1) {
                        $jawaban[$key] = $value1 . "&" . $value2;
                    }
                }
            }
            foreach ($jawaban as $key => $value) {
                $totaljawaban = Jawaban::all();
                $x = count($totaljawaban);
                Jawaban::create([
                    'id_jawaban' => $x + 1,
                    'id_soal' => $key,
                    'id_tes' => $request->id_tes,
                    'id_peserta' => $peserta->id,
                    'id_subtes' => $request->id_subtes,
                    'jawaban' => $value,
                ]);
            }
        } else {
            foreach ($request->jawaban as $key => $value) {
                $totaljawaban = Jawaban::all();
                $x = count($totaljawaban);
                Jawaban::create([
                    'id_jawaban' => $x + 1,
                    'id_soal' => $key,
                    'id_tes' => $request->id_tes,
                    'id_peserta' => $peserta->id,
                    'id_subtes' => $request->id_subtes,
                    'jawaban' => $value,
                ]);
            }
        }
        $x = $request->id_subtes + 1;
        $data_peserta = Peserta::where('id', $peserta->id)->first();
        if ($request->id_tes == 1) {
            if ($data_peserta->jeniskelamin_peserta == 'Laki-laki') {
                if ($x < 11) {
                    if ($x == 2) {
                        $var = "RMIB KELOMPOK B";
                    } elseif ($x == 3) {
                        $var = "RMIB KELOMPOK C";
                    } elseif ($x == 4) {
                        $var = "RMIB KELOMPOK D";
                    } elseif ($x == 5) {
                        $var = "RMIB KELOMPOK E";
                    } elseif ($x == 6) {
                        $var = "RMIB KELOMPOK F";
                    } elseif ($x == 7) {
                        $var = "RMIB KELOMPOK G";
                    } elseif ($x == 8) {
                        $var = "RMIB KELOMPOK H";
                    } elseif ($x == 9) {
                        $var = "RMIB KELOMPOK I";
                    } elseif ($x == 10) {
                        $var = "RMIB";
                    }
                    $petunjuk = Subtes::where('id_subtes', $x)->first();
                    $a = Soal::where('id_subtes', $x)->where('jenis_kelamin', $data_peserta->jeniskelamin_peserta)->get();
                    return view('peserta.soalrmib.ujianl', compact("a", "petunjuk", "var"));
                } elseif ($x == 11) {
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
                            'id_peserta' => $peserta->id,
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
                            'tanggal_pemeriksaan' => $jd->tanggal_tes,
                        ]);
                    }
                    $idpeserta = $peserta->id;
                    return view('pemberitahuan', compact('idpeserta'));
                }
            } elseif ($data_peserta->jeniskelamin_peserta == 'Wanita') {
                if ($x < 11) {

                    if ($x == 2) {
                        $var = "RMIB KELOMPOK B";
                    } elseif ($x == 3) {
                        $var = "RMIB KELOMPOK C";
                    } elseif ($x == 4) {
                        $var = "RMIB KELOMPOK D";
                    } elseif ($x == 5) {
                        $var = "RMIB KELOMPOK E";
                    } elseif ($x == 6) {
                        $var = "RMIB KELOMPOK F";
                    } elseif ($x == 7) {
                        $var = "RMIB KELOMPOK G";
                    } elseif ($x == 8) {
                        $var = "RMIB KELOMPOK H";
                    } elseif ($x == 9) {
                        $var = "RMIB KELOMPOK I";
                    } elseif ($x == 10) {
                        $var = "RMIB";
                    }
                    $petunjuk = Subtes::where('id_subtes', $x)->first();
                    $a = Soal::where('id_subtes', $x)->where('jenis_kelamin', $data_peserta->jeniskelamin_peserta)->get();
                    return view('peserta.soalrmib.ujianp', compact("a", "petunjuk", "var"));
                } elseif ($x == 11) {
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
                            'id_peserta' => $peserta->id,
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
                            'tanggal_pemeriksaan' => $jd->tanggal_tes,
                        ]);
                    }
                    $idpeserta = $peserta->id;
                    return view('pemberitahuan', compact('idpeserta'));
                }
            }
        } elseif ($request->id_tes == 2) {
            if ($x > 10 && $x <= 14) {
                $sub1 = Soal::where('id_subtes', $x)->get();
                $petunjuk = Subtes::where('id_subtes', $x)->first();
                if ($x == 11) {
                    $var = 1;
                } elseif ($x == 12) {
                    $var = 2;
                } elseif ($x == 13) {
                    $var = 3;
                } elseif ($x == 14) {
                    $var = 4;
                }
                return view('peserta.soalcfit.petunjuk', compact("sub1", "petunjuk", "var"));
            } elseif ($x == 15) {
                $data_jawaban = Jawaban::where('id_peserta', $peserta->id)->where('id_tes', 2)->get();
                $data_peserta = Peserta::where('id', $peserta->id)->first();
                $data_jadwal = Jadwal::where('id_peserta', $peserta->id)->where('id_tes', $request->id_tes)->first();
                $tgllahir = new DateTime($data_peserta->tanggallahir_peserta);
                $tgltes = new DateTime($data_jadwal->tanggal_tes);
                $diff = $tgltes->diff($tgllahir);
                $usia_tahun_peserta = $diff->y;
                $usia_bulan_peserta = $diff->m;
                $p = 0;
                foreach ($data_jawaban as $dj1) {
                    $dj[] = $dj1->id_soal;
                    $djb[] = $dj1->jawaban;
                }
                for ($i = 0; $i < count($dj); $i++) {
                    $data_soal1 = Soal::where('id_soal', $dj[$i])->get();
                    foreach ($data_soal1 as $ds1) {
                        $ds[] = $ds1->kunci_jawaban;
                    }
                }
                for ($i = 0; $i < count($djb); $i++) {
                    if ($djb[$i] == $ds[$i]) {
                        $x = $p + 1;
                        $p = $x;
                    }
                }
                $tsb1 = $p;
                if ($usia_tahun_peserta == 13 && $usia_bulan_peserta >= 0 && $usia_bulan_peserta <= 4) {
                    $data_klasifikasi = Klasifikasirs::where('raw_score', $tsb1)->first();
                    $sw = $data_klasifikasi->usia130_134;
                } elseif ($usia_tahun_peserta == 13 && $usia_bulan_peserta >= 5 && $usia_bulan_peserta <= 11) {
                    $data_klasifikasi = Klasifikasirs::where('raw_score', $tsb1)->first();
                    $sw = $data_klasifikasi->usia135_1311;
                } elseif ($usia_tahun_peserta == 14 && $usia_bulan_peserta >= 0 && $usia_bulan_peserta <= 11) {
                    $data_klasifikasi = Klasifikasirs::where('raw_score', $tsb1)->first();
                    $sw = $data_klasifikasi->usia140_1411;
                } elseif ($usia_tahun_peserta == 15 && $usia_bulan_peserta >= 0 && $usia_bulan_peserta <= 11) {
                    $data_klasifikasi = Klasifikasirs::where('raw_score', $tsb1)->first();
                    $sw = $data_klasifikasi->usia150_1511;
                } elseif ($usia_tahun_peserta == 16 && $usia_bulan_peserta >= 0 && $usia_bulan_peserta <= 11) {
                    $data_klasifikasi = Klasifikasirs::where('raw_score', $tsb1)->first();
                    $sw = $data_klasifikasi->usia160_1611;
                } elseif ($usia_tahun_peserta >= 17) {
                    $data_klasifikasi = Klasifikasirs::where('raw_score', $tsb1)->first();
                    $sw = $data_klasifikasi->usia170_keatas;
                }
                if ($sw <= 19) {
                    $iq = Skalaiq::where('id_skalaiq', 11)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => $peserta->id,
                        'id_kategori' => null,
                        'id_skalaiq' => 11,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 25 && $sw <= 30) {
                    $iq = Skalaiq::where('id_skalaiq', 10)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 10,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 36 && $sw <= 51) {
                    $iq = Skalaiq::where('id_skalaiq', 9)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 9,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 52 && $sw <= 67) {
                    $iq = Skalaiq::where('id_skalaiq', 8)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 8,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 68 && $sw <= 79) {
                    $iq = Skalaiq::where('id_skalaiq', 7)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 7,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 80 && $sw <= 89) {
                    $iq = Skalaiq::where('id_skalaiq', 6)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 6,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 90 && $sw <= 109) {
                    $iq = Skalaiq::where('id_skalaiq', 5)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 5,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 110 && $sw <= 119) {
                    $iq = Skalaiq::where('id_skalaiq', 4)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 4,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 120 && $sw <= 139) {
                    $iq = Skalaiq::where('id_skalaiq', 3)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 3,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 140 && $sw <= 169) {
                    $iq = Skalaiq::where('id_skalaiq', 2)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 2,
                        'total_jawaban' => $sw,
                    ]);
                } elseif ($sw >= 170) {
                    $iq = Skalaiq::where('id_skalaiq', 1)->first();
                    $totjab = Totaljawaban::all();
                    $ttotjab = count($totjab) + 1;
                    Totaljawaban::create([
                        'id_totaljawaban' => $ttotjab,
                        'id_tes' => 2,
                        'id_peserta' => 3,
                        'id_kategori' => null,
                        'id_skalaiq' => 1,
                        'total_jawaban' => $sw,
                    ]);
                }
            }
        }
        $idpeserta = $peserta->id;
        return view('pemberitahuan', compact('idpeserta'));
    }
}
