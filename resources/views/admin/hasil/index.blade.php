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
            <h5 class="m-0 font-weight-bold text-primary">Data Hasil Ujian</h5>
        </div>
        <div class="card-body">
    <div class="d-inline-block form-inline mb-3 float-right">
        <form action="{{ route('hasil.cari') }}" method="get">
        <input type="text" name="cari" class="form-control pull-right" placeholder="Search">
        <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
        <tr align ="center">
            <th>No</th>
            <th>Nama Peserta</th>
            <th colspan="4">OPSI</th>
        </tr>
@if($hasil != null)
        @foreach ($hasil as $h)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $h->peserta->nama_peserta }}</td>
            <td>
                <a href="{{ route('hasil.detail', $h->id_hasil) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;">Lihat</a>
            </td>
            @if($idpegawai == 1)
                <td>
                    <a href="{{ route('hasil.edit', $h->id_hasil) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;">Buat Deskripsi HPP</a>
                </td>
                <td>
                    <a href="{{ route('hasil.verifikasi', $h->id_hasil) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;">Verifikasi HPP</a>
                </td>
                <td>
                    <a href="{{ route('hasil.hapus', $h->id_hasil) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;"><i class="fas fa-trash-alt"></i></a>
                </td>
                @endif
            </tr>
        @endforeach
        @endif
    </table>
    </div>
    </div>
@endsection