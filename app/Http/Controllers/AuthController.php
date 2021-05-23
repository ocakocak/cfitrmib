<?php

namespace App\Http\Controllers;

use App\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {

        // Validate the form data
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        // Passwordnya pake bcrypt        

        if (Auth::guard('pegawai')->attempt($request->only('username', 'password'))) {
            // return 'test';
            return redirect()->route('dashboard.pegawai', Auth::guard('pegawai')->id());
        } elseif (Auth::guard('peserta')->attempt($request->only('username', 'password'))) {

            return redirect()->route('dashboard.peserta', Auth::guard('peserta')->id());
        } else {
            return redirect()->route('login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function register(Request $request)
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
        return redirect()->route('login');
    }
}
