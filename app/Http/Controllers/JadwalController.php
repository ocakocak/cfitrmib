<?php

namespace App\Http\Controllers;

use Dirape\Token\Token;
use App\Tes;
use App\Jadwal;
use App\Pegawai;
use App\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Parser\Tokens;

class JadwalController extends Controller
{
    public function lihat(Pegawai $pegawai)
    {
        $idpegawai = $pegawai->id;
        $data_jadwal = Jadwal::all();
        $data_tes = Tes::all();
        $data_peserta = Peserta::all();
        return view('admin.jadwal.index', compact('data_jadwal', 'data_tes', 'data_peserta', 'idpegawai'));
    }
    public function indextambah()
    {
        $data_jadwal = Jadwal::all();
        $data_tes = Tes::all();
        $data_peserta = Peserta::all();
        return view('admin.jadwal.indextambah', compact('data_jadwal', 'data_tes', 'data_peserta'));
    }
    public function tambah(Request $request)
    {
        foreach ($request->jadwal as $data) {
            Jadwal::create([
                'id_jadwal'             => $request->id_jadwal,
                'id_tes'            => $request->id_tes,
                'id_peserta'         => $data,
                'tanggal_tes' => $request->tanggal_tes,
                'jam_mulai'           => $request->jam_mulai,
                'token'           => (new Token)->Unique('tb_jadwal', 'token', 5),
                'status_ujian'           => '1',
            ]);
        }
        return redirect()->route('jadwal.index', Auth::guard('pegawai')->id())->with('success', 'jadwal Berhasil Ditambah!');
    }
    public function edit($id_jadwal)
    {
        $jadwal = Jadwal::where('id_jadwal', $id_jadwal)->first();
        $data_jadwal = Jadwal::get();
        $data_tes = Tes::all();
        $peserta = Peserta::all();
        return view('admin.jadwal.edit', compact('jadwal', 'data_jadwal', 'data_tes', 'peserta'));
    }
    public function update(Request $request, $id_jadwal)
    {
        $data_jadwal = Jadwal::find($id_jadwal);
        $data_jadwal->update($request->all());
        return redirect()->route('jadwal.index', Auth::guard('pegawai')->id())->with('success', 'jadwal Berhasil Diubah!');
    }
    public function hapus($id_jadwal)
    {
        $data_jadwal = Jadwal::find($id_jadwal);
        $data_jadwal->delete();
        return redirect()->route('jadwal.index', Auth::guard('pegawai')->id());
    }
    public function jadwalpeserta(Request $request, Peserta $peserta)
    {
        $data_jadwal = Jadwal::where('id_peserta', $peserta->id)->get();
        $data_tes = Tes::all();
        $data_peserta = Peserta::all();
        $pesertalogin = $peserta->id;
        return view('peserta.jadwal.index', compact('data_jadwal', 'data_tes', 'data_peserta', 'pesertalogin'));
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $data_jadwal = Jadwal::leftJoin('tb_peserta', 'tb_jadwal.id_peserta', '=', 'tb_peserta.id')
            ->leftJoin('tb_tes', 'tb_jadwal.id_tes', '=', 'tb_tes.id_tes')
            ->where('id_jadwal', 'like', '%' . $cari . '%')
            ->orWhere('nama_tes', 'like', '%' . $cari . '%')
            ->orWhere('nama_peserta', 'like', '%' . $cari . '%')
            ->orWhere('tanggal_tes', 'like', '%' . $cari . '%')
            ->orWhere('jam_mulai', 'like', '%' . $cari . '%')
            ->get();
        $idpegawai = Auth::guard('pegawai')->id();
        $data_tes = Tes::all();
        $data_peserta = Peserta::all();
        return view('admin.jadwal.index', compact('data_jadwal', 'data_tes', 'data_peserta', 'idpegawai'));
    }
    public function cetak(Request $request, Peserta $peserta)
    {
        $idpegawai = Auth::guard('pegawai')->id();
        $data_jadwal = Jadwal::all();
        $data_tes = Tes::all();
        $data_peserta = Peserta::all();
        return view('admin.jadwal.cetak', compact('data_jadwal', 'data_tes', 'data_peserta', 'idpegawai'));
    }
}
