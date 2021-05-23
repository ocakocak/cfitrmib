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
            <h5 class="m-0 font-weight-bold text-primary">Hasil Ujian</h5>
        </div>
        <div class="card-body">
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
        @if($tjc != null)
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
        <tr align ="center">
            <th>ASPEK PSIKOLOGIS</th>
            <th>KEMAMPUAN BERPIKIR</th>
            <th>DEVIASI/KLASIFIKASI</th>
        </tr>
        
        <?php $rangking = 1;?>
        @foreach ($tjc as $tjc)
        <tr>
                <td>Inteligensi Umum</td>   
                <td>Kemampuan untuk menilai dan memecahkan masalah yang dihadapi</td>
                <td><?php echo $tjc->total_jawaban?><br>{{$tjc->skalaiq->klasifikasi_iq}}</td>
              </tr>
              @endforeach
            </table>
            @endif
    </tr>
</table></center>

  <div class="table-responsive">
    @if($tjr != null)
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
    <tr align ="center">
        <th>KATEGORI</th>
        <th>MINAT BAKAT</th>
        <th>RANGKING</th>
    </tr>
    
    <?php $rangking = 1;?>
    @foreach ($tjr as $tjr)
    <tr>
            <td><?php echo $tjr->kategori->nama_kategori?></td>   
            <td><?php echo $tjr->kategori->keterangan_kategori?></td>
            <td align ="center"><?php echo $rangking++?></td>
          </tr>
          @endforeach
        </table>
        @endif

</div>
<div class="table-responsive">
  <form method="post" action="{{ route('hasil.update', $hasil->id_hasil) }}"  enctype="multipart/form-data"style="width: 100%" enctype="multipart/form-data">
  @csrf
  @method('patch')
  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">Kesimpulan</label>
                      <div class="col-md-6">
                          <input id="name" type="textarea" class="form-control" name="kesimpulan" value={{$hasil->kesimpulan}}>
                      </div>
                  </div>
  <button type="submit" class="btn btn-primary btn-md mt-3 font-weight-bold">Simpan</button>
</div>  
  {{-- <div class="col-md-12">
    <p align="right">
      Bengkulu,{{$hasil->tanggal_hppkeluar}}
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
    <u>Indah Syoraya, S.Psi., M.A,</u>
    </p>
</div>
<div class="col-md-3">
</div>
<div class="col-md-3">
 <p align="left">
    <u>Yossie Anggraeny. M, M. Psi.,Psikolog</u>
    <br>
    SIPP : 
    </p>
</div>
        </div> --}}
    </div>
</div>
</div>
@endsection