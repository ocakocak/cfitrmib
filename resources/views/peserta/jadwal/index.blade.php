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
            {{-- <a href="{{ route('jadwal.indextambah') }}"><button class="btn btn-sm btn-primary mt-2 font-weight-bold"><i class="fas fa-plus fa-sm"></i> Tambah Jadwal</button></a> --}}
    {{-- <div class="d-inline-block form-inline mb-3 float-right">
        <form action="{{ route('soal.cari') }}" method="get">
          <input type="text" name="cari" class="form-control pull-right" placeholder="Search">
          <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
        </form>
      </div> --}}
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
            <th colspan="2">OPSI</th>
          </tr>
          @foreach ($data_jadwal as $j)
          @if($j !=null)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $j->tes->nama_tes }}</td>
            <td>{{ $j->peserta->nama_peserta }}</td>
            <td>{{ $j->tanggal_tes }}</td>
            <td>{{ $j->jam_mulai }}</td>
            <td>{{ $j->token }}</td>
            <td>
              @if ($j->status_ujian == '1' && $j->tanggal_tes == date("Y-m-d"))
              <span>Belum Mengikuti Ujian</span>
              @elseif ($j->status_ujian == '1' && $j->tanggal_tes <= date("Y-m-d"))
              <span>Maaf anda terlambat</span>
              @elseif ($j->status_ujian == '1' && $j->tanggal_tes >= date("Y-m-d"))
              <span>Belum Waktu Ujian</span>
              @endif
              @if ($j->status_ujian == '2')
              <center><span>Sudah Mengikuti Ujian</span></center>
              @endif
            </td>
            <td>
              @if ($j->status_ujian == '1' )
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#token">
                Masukkan Token
              </button>
              @elseif ($j->status_ujian == '1' && $j->tanggal_tes <= date("Y-m-d")&& $j->tanggal_tes == date("Y-m-d"))
              <span>Maaf anda terlambat</span>
              @elseif ($j->status_ujian == '1' && $j->tanggal_tes >= date("Y-m-d"))
              <span>Belum Waktu Ujian</span>
              @endif
              @if ($j->status_ujian == '2')
              <center><span><i class="fas fa-check-square" style="color: blue"></i></i></span></center>
              @endif
            </td>
            @endif
          </tr>
        @endforeach
      </table>
    </div>
    
 
  <!-- Modal -->
  <div class="modal fade" id="token" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Masukkan Token</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="get" action="{{route('lihat.soal',Auth::guard('peserta')->id())}}"  enctype="multipart/form-data"style="width: 100%" enctype="multipart/form-data">
            @csrf
            @if ($data_jadwal != null)
            @foreach ($data_jadwal as $j)
            <div class="form-group">
              <input type="hidden" name="id_jadwal" value="{{$j->id_jadwal}}"class="form-control" required>
            </div>    
            @endforeach
            @endif
            <div class="form-group">
                <input type="text" name="inputan" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
  
  

@endsection