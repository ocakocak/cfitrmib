@include('templates/header')
@section('title')
Login
@endsection

@section('content')
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-6 col-md-6 mt-2">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('storelogin') }}">
                            @csrf

                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <img src="{{ asset('temp/assets/img/sahabatpsikologi.png')}}" style="height:100px; weight:100px" />
                                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang<br>
                                            Silahkan Login!</h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Masukan username" required autocomplete="username" autofocus>
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Pasword</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan Password" required autocomplete="current-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                           
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                                @if (Route::has('password.request'))
                                            </button>
                                            <!-- <div class="text-center">
                                                <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                            </div> -->
                                            <br>
                                            <div class="text-center mt-2">
                                                <a class="small" href="{{ route('register') }}"><h6>Belum punya akun? Klik Daftar</h6></a>
                                            </div>
                                            @endif
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