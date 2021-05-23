<?php

namespace App\Http\Controllers;

use App\Tes;
use App\Jadwal;
use App\Peserta;
use App\Jawaban;
use App\Kategori;
use App\Hasil;
use App\Pegawai;
use App\Totaljawaban;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class HasilController extends Controller
{
    public function lihat(Pegawai $pegawai)
    {
        $idpegawai = $pegawai->id;
        $hasil = Hasil::all();
        return view('admin.hasil.index', compact('hasil', 'idpegawai'));
    }
    public function hasilpeserta(Peserta $peserta)
    {
        $data_tes = Jawaban::all();
        $data_peserta = Peserta::all();
        $tjr = Totaljawaban::where('id_peserta', $peserta->id)->where('id_tes', 1)->get();
        $tjc = Totaljawaban::where('id_peserta', $peserta->id)->where('id_tes', 2)->get();
        $hasil = Hasil::where('id_peserta', $peserta->id)->first();
        return view('peserta.hasil.hasilpeserta', compact('tjr', 'tjc', 'hasil', 'data_peserta'));
    }
    public function detail($id_hasil)
    {
        $hasil = Hasil::where('id_hasil', $id_hasil)->first();
        $id = $hasil->id_peserta;
        $tjc = Totaljawaban::where('id_peserta', $id)->where('id_tes', 2)->get();
        $tjr = Totaljawaban::where('id_peserta', $id)->where('id_tes', 1)->get();
        return view('peserta.hasil.hasilpeserta', compact('tjr', 'tjc', 'hasil'));
    }
    public function edit($id_hasil)
    {
        $data_tes = Jawaban::all();
        $data_peserta = Peserta::all();
        $hasil = Hasil::where('id_hasil', $id_hasil)->first();
        $id = $hasil->id_peserta;
        $tjr = Totaljawaban::where('id_peserta', $id)->where('id_tes', 1)->get();
        $tjc = Totaljawaban::where('id_peserta', $id)->where('id_tes', 2)->get();
        return view('psikolog.hpp', compact('tjr', 'tjc', 'hasil', 'data_peserta'));
    }
    public function verifikasi($id_hasil)
    {
        $data_tes = Jawaban::all();
        $data_peserta = Peserta::all();
        $tanggalkeluarhpp = date("Y-m-d");
        $hasil = Hasil::where('id_hasil', $id_hasil)->first();
        $hasil->tanggal_hppkeluar = $tanggalkeluarhpp;
        $hasil->save();
        $id = $hasil->id_peserta;
        $tjr = Totaljawaban::where('id_peserta', $id)->where('id_tes', 1)->get();
        $tjc = Totaljawaban::where('id_peserta', $id)->where('id_tes', 2)->get();
        return view('psikolog.hasil.verifikasi', compact('tjr', 'tjc', 'hasil', 'data_peserta'));
    }
    public function keluarkanhpp($id_hasil)
    {
        $data_psikolog = Pegawai::where('jabatan_pegawai', 'Psikolog Utama')->first();
        Hasil::where('id_hasil', $id_hasil)->update(array("ttd_psikolog" => $data_psikolog->ttd, "sipp" => $data_psikolog->sipp, "ttd_direktur" => "ttddireketur.png"));
        return redirect()->route('hasil', Auth::guard('pegawai')->id());
    }
    public function tambah()
    {
        $data_tes = Jawaban::all();
        $data_peserta = Peserta::all();
        $totaljawaban = Totaljawaban::where('id_peserta', 3)->get();
        $hasil = Hasil::where('id_peserta', 3)->first();
        return view('psikolog.hpp', compact('totaljawaban', 'hasil', 'data_peserta'));
    }
    public function update(Request $request, $id_hasil)
    {
        $data_hasil = Hasil::where('id_hasil', $id_hasil)->update(array("kesimpulan" => $request->kesimpulan));
        return redirect()->route('hasil', Auth::guard('pegawai')->id());
    }
    public function hapus($id_hasil)
    {
        $data_hasil = Hasil::find($id_hasil);
        $data_hasil->delete();
        return redirect()->route('hasil', Auth::guard('pegawai')->id());
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $hasil = Hasil::leftJoin('tb_peserta', 'tb_hasil.id_peserta', '=', 'tb_peserta.id')
            ->where('nama_peserta', 'like', '%' . $cari . '%')
            ->get();
        $idpegawai = Auth::guard('pegawai')->id();
        return view('admin.hasil.index', compact('hasil', 'idpegawai'));
    }
    public function cetak($id_hasil)
    {
        $hasil = Hasil::where('id_hasil', $id_hasil)->first();
        $id = $hasil->id_peserta;
        $tjc = Totaljawaban::where('id_peserta', $id)->where('id_tes', 2)->get();
        $tjr = Totaljawaban::where('id_peserta', $id)->where('id_tes', 1)->get();
        return view('peserta.hasil.cetak', compact('tjr', 'tjc', 'hasil'));
    }
}
