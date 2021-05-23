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
            <h5 class="m-0 font-weight-bold text-primary">Dashboard</h5>
        </div>
        <div class="card-body">
        <h5 style="color: black" class="font-weight-bold">{{$tesrmib->nama_tes}} ({{$tesrmib->jenis_tes}})</h5>
        <h6 style="color: black">Bertujuan {{$tesrmib->tujuan_tes}}</h6>
        <br>
        <h5 style="color: black" class="font-weight-bold">{{$tescfit->nama_tes}} ({{$tescfit->jenis_tes}})</h5>
        <h6 style="color: black">Bertujuan {{$tescfit->tujuan_tes}}</h6>
        <br>
        <h5 style="color: black" class="font-weight-bold">Petunjuk Melakukan Tes :</h5>
        <h6 style="color: black">1. Pergi ke Menu Jadwal untuk melihat jadwal ujian<br>
        2. Masukkan Token yang Terdapat di Menu Jadwal untuk Memulai Ujian<br>
        3. Jika Sudah Selesai Mengerjakan Ujian Klik Tombol Simpan untuk Menyimpan Jawaban<br>
        4. Setelah Jawaban Tersimpan, Peserta dapat Melihat Hasil di Menu Hasil Ujian </h6>
        <br>
        </div>
        </div>
        </div>
@stop