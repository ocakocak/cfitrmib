@extends('layouts.backend')
@section('title')
SAHABAT PSIKOLOGI
@endsection

@section('content')
<div class="container-fluid"style="width: 50%;">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary"><i class="fas fa-edit"></i>Form Edit Data Jadwal</h5>
        </div>
<div class="container-fluid">
    <form method="post" action="{{ route('peserta.update', $peserta->id_peserta) }}"  enctype="multipart/form-data"style="width: 100%" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="hidden" name="id_peserta" class="form-control" value="{{ $peserta->id_peserta }}">
        </div>
        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nama_peserta">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="jeniskelamin_peserta" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="jeniskelamin_peserta">
                                    <option>Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempatlahir_peserta" class="col-md-4 col-form-label text-md-right">Tempat Lahir Peserta</label>
                            <div class="col-md-6">
                                <input id="tempatlahir_peserta" type="tempatlahir_peserta" class="form-control" name="tempatlahir_peserta">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="tanggallahir_peserta" class="col-md-4 col-form-label text-md-right">Tanggal Lahir Peserta</label>
                            <div class="col-md-6">
                                <input id="tanggallahir_peserta" type="date" class="form-control" name="tanggallahir_peserta">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="pendidikan_terakhir" class="col-md-4 col-form-label text-md-right">{{ __('Pendidikan Terakhir') }}</label>
                            <div class="col-md-6">
                                <input id="pendidikan_terakhir" type="pendidikan_terakhir" class="form-control" name="pendidikan_terakhir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>
                            <div class="col-md-6">
                                <input id="pekerjaan" type="pekerjaan" class="form-control" name="pekerjaan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nohp" class="col-md-4 col-form-label text-md-right">{{ __('No HP') }}</label>
                            <div class="col-md-6">
                                <input id="nohp" type="nohp" class="form-control" name="nohp_peserta">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email_peserta">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control" name="username">
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>                 
        <button type="submit" class="btn btn-primary btn-md mt-3 font-weight-bold">Simpan</button>
      
       

    </form>
</div>
@endsection