<html>

<head>
  <title> Hasil Pemeriksaan Psikologi </title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  
  <link href="{{ asset('temp/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('temp/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <style>
        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 4px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
            border-color: rgb(117, 177, 218)
        }
        .border3{
            border-style:dashed;
            border-color:#cc59f9;
            border-width:thick;
        }
    </style>
    
</head>
<body >
    {{-- <img src="{{ asset('images/border.png')}}"   --}}
    {{-- <p img="images/border.png"> --}}
  {{-- <font face="Arial" color="black"> <p align="center"> PEMERINTAH KOTA CIREBON </p></font> --}}
  {{-- <font face="Times New Roman" color="blue"> <p align="center"> PERUSAHAAN PENYEWAAN MOBIL KOTA BENGKULU</p></font> --}}
  <div id=halaman>
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
</div>
<br>
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
    SIPP : 
    </p>
</div>
        </div>
<script src="{{ asset('temp/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('temp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('temp/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('temp/assets/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{ asset('temp/assets/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('temp/assets/js/demo/chart-area-demo.js')}}"></script>
<script src="{{ asset('temp/assets/js/demo/chart-pie-demo.js')}}"></script>

<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
</body>

</html>