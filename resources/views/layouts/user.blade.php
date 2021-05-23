<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>Sahabat Karir</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="icon" href="{{ asset('temp/assets/gambar/sahabatkarir.png')}}" type="image/x-icon">
		<!-- Google Fonts -->
				<link href="https://fonts.googleapis.com/css?family=Dosis:100,200,300,400,600,500,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
				<!-- Bootstrap 4.3.1 CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<!-- AOS 2.3.1 jQuery plugin CSS (Animations) -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!-- FontAwesome CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- Startup 3 CSS (Styles for all blocks) -->
					<link href="{{url('appwebsite/css/style.css')}}" rel="stylesheet" />
				<!-- jQuery 3.3.1 -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			</head> 
	<body>
        <!-- Navigation 18 -->
       
<nav class="navigation_18 bg-gradient-primary pt-30 pb-30 lh-40 text-center" >
	<div class="container px-xl-0" style="color: darkturquoise">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-auto text-lg-left" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<a href="#" class="logo link color-white" ><img src="{{ asset('temp/assets/gambar/sahabatkarir.png')}}" style="width:80px;" />Sahabat Karir</a>
			</div>

			<div class="col-lg-6 text-lg-right" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="/" class="link color-white mr-15">BERANDA</a>
				<a href="{{route('user.galeri')}}" class="link color-white mx-15">GALERI</a>

				<style>
					.contoh-dropdown {
					  position: relative;
					  display: inline-block;
					  z-index: 999;
					  
					}
					.contoh-dropdown span {
					  background: #4e73df;
					  color:white;
					  padding:10px;
					  align:center;
					}
					.isi-dropdown {
					  display: none;
					  position: block;
					  background-color: #4e73df;
					  margin-top:5px;
					  min-width: 150px;
					  padding: 5px 5px;
					  z-index: 1000;
					  color:white
					}
					.contoh-dropdown:hover .isi-dropdown {
					  display: block;
					}
					</style>
				<div class="contoh-dropdown bg-gradient-primary">
					<span>INFORMASI</span>
					<div class="isi-dropdown " align="left">
						<ul>
					  <a href={{route('user.jadwal')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">JADWAL</span></a>
					  <br><a href={{route('user.hasilpelajaran')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">NILAI PELAJARAN</span></a>
					  <br><a href={{route('user.presensi')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">PRESENSI</span></a>
					  <br><a href={{route('user.paket')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">PAKET</span></a>
					  <br><a href={{route('user.kelas')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">KELAS</span></a>
					  <br><a href={{route('user.pengajar')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">PENGAJAR</span></a>
					  <br><a href={{route('user.nilaito')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">NILAI TO</span></a>
			  
					</div>
				  </div>
				
				
			
                
				@guest
                    <a class="link color-white mx-15" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
        
            @else
       
              {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span style="color: aliceblue">{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down" style="color: aliceblue"></i></a>           
              <ul class="dropdown-menu">
                {{-- @if(auth()->user()->role == 'pelanggan') --}}
                {{-- <li><a href="user/profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li> --}}
                {{-- @endif --}}
                <!-- <li><a href="/ubahpass"><i class="lnr lnr-user"></i> <span>Ubah Password</span></a></li> --> 
                 <a class="link color-white mx-15" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    {{ __('LOGOUT') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
            @endguest
              </ul>
            </li>
				{{-- <form method="GET" action="/" class="ml-15 mt-10 mt-md-0 d-inline-block">
					<input type="text" name="search" placeholder="Search" class="input sm w-200 mw-full border-transparent-white focus-white color-white placeholder-transparent-white text-center text-md-left" />
					<input type="submit" class="d-none" />
				</form> --}}
			</div>
			</div>
		</div>
	</div>
</nav>
@yield('container')
<!-- Footer 11 -->

<footer class="footer_11 bg-gradient-primary pt-45 pb-45 color-white text-center">
	<div class="container px-xl-0">
		<footer id="footer">
			<div class="footer-top">
			  <div class="container">
				<div class="row">
		
				  <div class="col-lg-4 col-md-6 footer-info">
					<div class="col-lg-auto text-lg-left" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
						<a href="#" class="logo link color-white" ><img src="{{ asset('temp/assets/gambar/sahabatkarir.png')}}" style="width:80px;" />Sahabat Karir</a>
					</div>
					
				</div>
				  <div class="col-lg-4 col-md-6 footer-links" >
					<h4>Link</h4>
					<ul align="left">
					<a href="/" class="link color-white mx-15">  BERANDA</a><br>
					<a href="#" class="link color-white mx-15 dropdown-toggle " data-toggle="dropdown" >INFORMASI</a><br>
					<ul class="dropdown-menu bg-gradient-primary">
						
						
						<li><a href={{route('user.jadwal')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">JADWAL</span></a></li>
						<li><a href={{route('user.hasilpelajaran')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">NILAI PELAJARAN</span></a></li>
						<li><a href={{route('user.presensi')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">PRESENSI</span></a></li>
						<li><a href={{route('user.paket')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">PAKET</span></a></li>
						<li><a href={{route('user.kelas')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">KELAS</span></a></li>
						<li><a href={{route('user.pengajar')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">PENGAJAR</span></a></li>
						<li><a href={{route('user.nilaito')}}><i class="lnr lnr-user"></i> <span style="color: blanchedalmond">NILAI TO</span></a></li>
				
					  </ul>
					<a href="{{route('user.galeri')}}" class="link color-white mx-15">GALERI</a><br>
					
				
				  </div>
				  <div class="col-lg-4 col-md-6 footer-contact">
					<h4>Contact Us</h4>
					<p align="left">
					  Jl. Kerapu rt.01 rw.01 no.45 Kel. Berkas Kec. Teluk Segara Kota Bengkulu <br>
					  <strong align="left">Hubungi Kami :</strong> 08117312300<br>
					</p>
		
					<div class="social-links">
					  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
					  <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
					  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</footer>
<!-- forms alerts -->
<div class="alert alert-success alert-dismissible alert-form-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Thanks for your message!
</div>
<div class="alert alert-warning alert-dismissible alert-form-check-fields" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Please, fill in required fields.
</div>
<div class="alert alert-danger alert-dismissible alert-form-error" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	An error occurred while sending data :(
</div>
<!-- popup with video -->
<div class="overlay"></div>

<div class="video_popup">
	<a class="close">
		<img srcset="i/close_white@2x.png 2x" src="i/close_white.png" alt="" />
	</a>
	<div class="d-flex align-items-center justify-content-center w-full h-full iframe_container"></div>
</div>
<!-- Bootstrap 4.3.1 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- Google maps JS API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- AOS 2.3.1 jQuery plugin JS (Animations) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
<script src="{{url('appwebsite/js/jquery.maskedinput.min.js')}}"></script>
<!-- Startup 3 JS (Custom js for all blocks) -->
<script src="{{url('appwebsite/js/script.js')}}"></script>

</body>
</html>