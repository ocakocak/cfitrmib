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
          <div class="row">
            <div class="col-md-12">
            <div class="col-md-3" style="float: left">
            <h5 class="m-0 font-weight-bold text-primary">Hasil Ujian</h5>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-3" style="float: right">
              @if($hasil != null)
              <a style="float: right"href="{{ route('hasil.cetak', $hasil->id_hasil) }}" class="btn btn-sm btn-primary" style="color: white; cursor: pointer;">Cetak HPP</a>
            </div></div></div>
            @endif
          </div>
          @if($hasil != null)
          <div class="card-body">
            @if($hasil->ttd_psikolog !=null && $hasil->sipp !=null)
            <img src="{{ asset('temp/assets/img/kop surat ppc.png')}}" style="width: 100%;"/>
            <br>
            <h3 align="center" class="font-weight-bold" style="color:black"> {{$hasil->peserta->nama_peserta}}</h3>
            <br>
            <p align="center">
              <center><table class="table" style="background-color: cornflowerblue; width: 80%; font-color: white">
                <tr>
                  <td style="width: 30%; color:white">TEMPAT/ TANGGAL LAHIR</td>
                  <td style="width: 5%; color:white">:</td>
        <td style="width: 30%; color:white">{{$hasil->peserta->tempatlahir_peserta}}/ {{$hasil->peserta->tanggallahir_peserta}}</td>
      </tr>
      <tr>
        <td style="width: 30%; color:white" vertical-align: top;>JENIS KELAMIN</td>
        <td style="width: 5%; color:white" vertical-align: top;>:</td>
        <td style="width: 30%; color:white">{{$hasil->peserta->jeniskelamin_peserta}}</td>
      </tr>
      <tr>
        <td style="width: 30%; color:white">PEKERJAAN</td>
        <td style="width: 5%; color:white">:</td>
        <td style="width: 30%; color:white">{{$hasil->peserta->pekerjaan}}</td>
      </tr>
      <tr>
        <td style="width: 30%;color:white">TANGGAL PEMERIKSAAAN</td>
        <td style="width: 5%;color:white">:</td>
        <td style="width: 30%;color:white">{{$hasil->jadwal->tanggal_tes}}</td>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
        <tr align ="center">
            <th>ASPEK PSIKOLOGIS</th>
            <th>KEMAMPUAN BERPIKIR</th>
            <th>DEVIASI/KLASIFIKASI</th>
        </tr>
        
        <?php $rangking = 1;?>
        @if ($tjc != null)
        @foreach ($tjc as $tjc)
        <tr>
                <td>Inteligensi Umum</td>   
                <td>Kemampuan untuk menilai dan memecahkan masalah yang dihadapi</td>
                <td align="center"><?php echo $tjc->total_jawaban?><br>{{$tjc->skalaiq->klasifikasi_iq}}</td>
              </tr>
              @endforeach
              @endif
            </table>
    </tr>
</table></center>

  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
    <tr align ="center">
        <th>KATEGORI</th>
        <th>MINAT BAKAT</th>
        <th>RANGKING</th>
    </tr>
    
    <?php $rangking = 1;?>
    @if ($tjr != null)
    @foreach ($tjr as $tjr)
    <tr>
            <td><?php echo $tjr->kategori->nama_kategori?></td>   
            <td><?php echo $tjr->kategori->keterangan_kategori?></td>
            <td align ="center"><?php echo $rangking++?></td>
          </tr>
          @endforeach
          @endif
        </table>

</div>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
        <tr align="center">
            <th>KESIMPULAN</th>
        </tr>
        <tr>
            <td>{{$hasil->kesimpulan}}</td>
        </tr>
    </table>
</div>  
  <div class="col-md-12">
    <p align="right">
      Bengkulu, {{$hasil->tanggal_hppkeluar}}
    </p>
</div>
<div class="row">
<div class="col-md-6">
 <p align="left">
    Penanggungjawab
    </p>
</div>
</div>
<div class="row">
<div class="col-md-6">
 <p align="left">
    Lembaga Konsultan Psikologi
    </p>
</div>
<div class="col-md-3">
</div>
<div class="col-md-3">
 <p align="left">
    Psikolog,
    </p>
</div>
<div class="col-md-6">
 <p align="left">
    &nbsp &nbsp &nbsp &nbsp CV.PSIKO
    </p>
</div>
</div>
<div class="row">
<div class="col-md-6">
 <p align="left">
   &nbsp;&nbsp;
  <img src="{{ asset('temp/assets/img/ttddirektur.png')}}" width="150px"/>
</p>
</div>
<div class="col-md-3">
</div>
<div class="col-md-3">
  <p align="left">
      <img src="{{ asset('temp/assets/img/ttdpsikolog.png')}}"width="150px"/>
    </p>
</div>
</div>

<div class="row">
<div class="col-md-6">
 <p align="left">
    <u>Indah Syoraya, S.Psi., M.A,</u>
    </p>
</div>
<div class="col-md-3">
</div>
<div class="col-md-3">
 <p align="left">
    <u>Yossie Anggraeny. M, M. Psi.,Psikolog</u>
    <br>
    SIPP : {{$hasil->sipp}}
    </p>
</div>
        </div>
        @else
        <center><h5 class="font-weight-bold"style="color:black">Hasil Ujian Sedang di Proses</h5></center>
        @endif
    </div>
  </div>
</div>
@endif
@endsection