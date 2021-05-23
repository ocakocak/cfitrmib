<?php

namespace App\Http\Controllers;

use Dirape\Token\Token;
use App\Tes;
use App\Jadwal;
use App\Jawaban;
use App\Pegawai;
use App\Peserta;
use App\Soal;
use App\Subtes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PesertaController extends Controller
{
    public function lihat(Pegawai $pegawai)
    {
        $idpegawai = $pegawai->id;
        $data_peserta = Peserta::all();
        return view('admin.peserta.index', compact('data_peserta', 'idpegawai'));
    }
    public function tambah(Request $request)
    {
        $x = Peserta::all();
        Peserta::create([
            'id_peserta'             => count($x) + 1,
            'nama_peserta'            => $request->nama_peserta,
            'jeniskelamin_peserta'         => $request->jeniskelamin_peserta,
            'tempatlahir_peserta'         => $request->tempatlahir_peserta,
            'tanggallahir_peserta'         => $request->tanggallahir_peserta,
            'usia_tahun'         => null,
            'usia_bulan'         => null,
            'usia_hari'         => null,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'pekerjaan'           => $request->pekerjaan,
            'nohp_peserta'         => $request->nohp_peserta,
            'email_peserta'         => $request->email_peserta,
            'username'         => $request->username,
            'password'         => Hash::make($request->password),
        ]);
        $data_peserta = Peserta::all();
        return view('admin.peserta.index', compact('data_peserta'));
    }
    public function edit($id)
    {
        $peserta = peserta::where('id', $id)->first();
        $data_peserta = peserta::get();
        $data_tes = Tes::all();
        $peserta = Peserta::all();
        return view('admin.peserta.edit', compact('peserta', 'data_peserta', 'data_tes', 'peserta'));
    }
    public function update(Request $request, $id)
    {
        $data_peserta = Peserta::find($id);
        $data_peserta->update($request->all());
        return redirect()->route('peserta.index')->with('success', 'peserta Berhasil Diubah!');
    }
    public function hapus($id)
    {
        $data_peserta = Peserta::find($id);
        $data_peserta->delete();
        return redirect()->route('peserta');
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $data_peserta = Peserta::where('id', 'like', '%' . $cari . '%')
            ->orWhere('nama_peserta', 'like', '%' . $cari . '%')
            ->orWhere('jeniskelamin_peserta', 'like', '%' . $cari . '%')
            ->orWhere('tempatlahir_peserta', 'like', '%' . $cari . '%')
            ->orWhere('tanggallahir_peserta', 'like', '%' . $cari . '%')
            ->orWhere('usia_tahun', 'like', '%' . $cari . '%')
            ->orWhere('pendidikan_terakhir', 'like', '%' . $cari . '%')
            ->orWhere('pekerjaan', 'like', '%' . $cari . '%')
            ->orWhere('nohp_peserta', 'like', '%' . $cari . '%')
            ->orWhere('username', 'like', '%' . $cari . '%')
            ->orWhere('password', 'like', '%' . $cari . '%')
            ->get();
        $idpegawai = Auth::guard('pegawai')->id();
        return view('admin.peserta.index', compact('data_peserta', 'idpegawai'));
    }
    public function cetak(Request $request, Peserta $peserta)
    {
        $idpegawai = Auth::guard('pegawai')->id();
        $data_peserta = Peserta::all();
        return view('admin.peserta.cetak', compact('data_peserta', 'idpegawai'));
    }
    // public function tambah2(Request $request)
    // {
    //     $x = Peserta::all();
    //     // $date1 = Peserta::select('tanggallahir_peserta')->where('id', count($x) + 1)->first();
    //     // $date2 = Jadwal::select('tanggal_tes')->where('id_peserta', count($x) + 1)->where('id_tes', 2)->first();
    //     // $start_date = new DateTime($date1->tanggallahir_peserta);
    //     // $end_date = new DateTime($date2->tanggal_tes);
    //     // $perbedaan = $end_date->diff($start_date);

    //     // //gabungkan
    //     // $thn =  $perbedaan->y;
    //     // $bln = $perbedaan->m;
    //     // $hr = $perbedaan->d;
    //     // Peserta::where('id', 3)->update(array("usia_tahun" => $perbedaan->y, "usia_bulan" => $perbedaan->m, "usia_hari" => $perbedaan->d));
    //     Peserta::create([
    //         'id_peserta'             => count($x) + 1,
    //         'nama_peserta'            => $request->nama_peserta,
    //         'jeniskelamin_peserta'         => $request->jeniskelamin_peserta,
    //         'tempatlahir_peserta'         => $request->tempatlahir_peserta,
    //         'tanggallahir_peserta'         => $request->tanggallahir_peserta,
    //         'usia_tahun'         => null,
    //         'usia_bulan'         => null,
    //         'usia_hari'         => null,
    //         'pendidikan_terakhir' => $request->pendidikan_terakhir,
    //         'pekerjaan'           => $request->pekerjaan,
    //         'nohp_peserta'         => $request->nohp_peserta,
    //         'email_peserta'         => $request->email_peserta,
    //         'username'         => $request->username,
    //         'password'         => Hash::make($request->password),
    //     ]);
    //     return redirect()->route('peserta');
    // }
}
