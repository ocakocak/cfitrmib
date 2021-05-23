@include('templates/header')
@section('title')
Register
@endsection

@section('content')
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-6 col-md-6 mt-2">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                    <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <img src="{{ asset('temp/assets/img/sahabatpsikologi.png')}}" style="height:100px; weight:100px" />
                                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang<br>
                                            Silahkan Daftar!</h1>
                                        </div>
                        <form method="POST" action="{{ route('register') }}">
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
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Daftar
                                            </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets_user/js/sb-admin-2.min.js"></script>

</body>

</html>
