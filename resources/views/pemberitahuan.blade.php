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
            <center><h5 class="m-0 font-weight-bold text-primary">PEMBERITAHUAN</h5></center>
        </div>
        <div class="card-body">
        <center><h6>Hasil Ujian Anda Sedang di Proses</h6></center>
        <center><h6>Silahkan lihat di Menu Hasil Ujian</h6></center>
    </div>
    </div>        
@endsection