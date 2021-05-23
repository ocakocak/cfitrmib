@extends('layouts.backend')
@section('title')
SAHABAT PSIKOLOGI
@endsection

@section('content')
{{-- @include('flash-message') --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Data Peserta</h5>
        </div>
        <div class="card-body">
            <div class="d-inline-block form-inline mb-3 float-left">
                @if($idpegawai==2)
                <button class="btn btn-sm btn-primary mt-2 font-weight-bold" data-toggle="modal" data-target="#tambah_peserta"><i class="fas fa-plus fa-sm"></i> Tambah Data Peserta</button>
            <br><br>
            @endif
        </div>
        <div class="d-inline-block form-inline mb-3">
        </div>
        <div class="d-inline-block form-inline mb-3 float-right">
                    <form action="{{ route('peserta.cari') }}" method="get">
                        <input type="text" name="cari" class="form-control pull-right" placeholder="Search">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
            </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
        <tr align ="center">
            <th>No</th>
            <th>Nama Peserta</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Usia</th>
            <th>Pendidikan Terakhir</th>
            <th>Pekerjaan</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Username</th>
            @if($idpegawai==2)
            <th colspan="2">OPSI</th>
            @endif
        </tr>
@if($data_peserta != null)
        @foreach ($data_peserta as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nama_peserta }}</td>
            <td>{{ $p->jeniskelamin_peserta }}</td>
            <td>{{ $p->tempatlahir_peserta }}</td>
            <td>{{ $p->tanggallahir_peserta }}</td>
            <td>{{ $p->usia_tahun }}</td>
            <td>{{ $p->pendidikan_terakhir }}</td>
            <td>{{ $p->pekerjaan }}</td>
            <td>{{ $p->nohp_peserta }}</td>
            <td>{{ $p->email_peserta }}</td>
            <td>{{ $p->username }}</td>
            @if($idpegawai==2)
                <td>
                    <a href="{{ route('peserta.hapus', $p->id) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;"><i class="fas fa-trash-alt"></i></a>
                </td>
                @endif
        </tr>
        @endforeach
        @endif
    </table>
    <a href="{{ route('peserta.cetak', $p->id) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;float:right"><i class="fas fa-print"></i></a>
    <div class="modal fade" id="tambah_peserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header card-header py-3">
                <h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">Form Input Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('peserta.tambah2') }}" method="post" enctype="multipart/form-data">
                    @csrf
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
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                </div>
                
            </form>
            
        </div>
    </div>
</div>
</div>
@endsection