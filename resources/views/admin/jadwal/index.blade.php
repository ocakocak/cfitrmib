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
            <h5 class="m-0 font-weight-bold text-primary">Data Jadwal</h5>
        </div>
        <div class="card-body">
            <div class="d-inline-block form-inline mb-3 float-right">
                <form action="{{ route('jadwal.cari') }}" method="get">
                    <input type="text" name="cari" class="form-control pull-right" placeholder="Search">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
                </form>
            </div>
            <div class="d-inline-block form-inline mb-3">
            </div>
            <div class="d-inline-block form-inline mb-3 float-left">
        @if($idpegawai == 2)
        <a href="{{ route('jadwal.indextambah') }}"><button class="btn btn-sm btn-primary mt-2 font-weight-bold"><i class="fas fa-plus fa-sm"></i> Tambah Jadwal</button></a>
<br><br>
@endif  
</div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
        <tr align ="center">
            <th>No</th>
            <th>Jenis Tes</th>
            <th>Nama Peserta</th>
            <th>Tanggal Tes</th>
            <th>Waktu</th>
            <th>Token</th>
            <th>Status Ujian</th>
            @if($idpegawai == 2)
            <th colspan="2">OPSI</th>
            @endif
        </tr>
        @if($data_jadwal != null)
        <?php
        $no = 1; 
        foreach ($data_jadwal as $j) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $j->tes->nama_tes?></td>
                <td><?php echo $j->peserta->nama_peserta?></td>
                <td><?php echo $j->tanggal_tes?></td>
                <td><?php echo $j->jam_mulai?></td>
                <td><?php echo $j->token?></td>
                <td><?php if ($j->status_ujian='1'){
                    echo 'Belum Mengikuti Ujian';}elseif ($j->status_ujian='2'){
                        echo 'Sudah Mengikuti Ujian';}?></td>
                        @if($idpegawai == 2)
                <td>
                    <a href="{{ route('jadwal.edit', $j->id_jadwal) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <a href="{{ route('jadwal.hapus', $j->id_jadwal) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;"><i class="fas fa-trash-alt"></i></a>
                </td>
                @endif
            </tr>
        <?php endforeach; ?>
@endif
    </table>
    <a href="{{ route('jadwal.cetak', $j->id_jadwal) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;float:right"><i class="fas fa-print"></i></a>
</div>

@endsection