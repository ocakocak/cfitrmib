<html>

<head>
  <title> Daftar Peserta Tes </title>

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
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }
        .border3{
            border-style:dashed;
            border-color:#cc59f9;
            border-width:thick;
        }
    </style>
    
</head>
<body >
    <br>
    <center><h5 style="color:black">Daftar Jadwal Tes</h5></center>
    {{-- <img src="{{ asset('images/border.png')}}"   --}}
    {{-- <p img="images/border.png"> --}}
  {{-- <font face="Arial" color="black"> <p align="center"> PEMERINTAH KOTA CIREBON </p></font> --}}
  {{-- <font face="Times New Roman" color="blue"> <p align="center"> PERUSAHAAN PENYEWAAN MOBIL KOTA BENGKULU</p></font> --}}
  <div id=halaman>
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
        </tr>
        @endforeach
        @endif
    </table>

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