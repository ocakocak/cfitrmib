<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('temp/assets/img/sahabatpsikologi.png')}}" width="50px">
        </div>
        <div class="sidebar-brand-text mx-3">Sahabat Psikologi</div>
      </a>
      <hr class="sidebar-divider my-0">
      @if(Auth::guard('pegawai')->id())
      <li class="nav-item font-weight-bold">
      <a class="nav-link" href="{{route('dashboard.pegawai',Auth::guard('pegawai')->id())}}">
        <i class="fas fa-fw fa-tachometer-alt" style="color: white"></i>
        <span>Dashboard</span></a>
      </li> @elseif(Auth::guard('peserta')->id())
      <li class="nav-item font-weight-bold">
      <a class="nav-link" href="{{route('dashboard.peserta',Auth::guard('peserta')->id())}}">
        <i class="fas fa-fw fa-tachometer-alt" style="color: white"></i>
        <span>Dashboard</span></a>
      </li>
      @endif
     @if(Auth::guard('pegawai')->id())
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{route('peserta',Auth::guard('pegawai')->id())}}">
          <i class="fas fa-fw fa-users"style="color: white"></i>
          <span>Peserta</span></a>
        </li>
@endif
@if(Auth::guard('pegawai')->id())
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href={{ route('jadwal.index',Auth::guard('pegawai')->id())}}>
          <i class="fas fa-calendar-alt"style="color: white"></i>
          <span>Jadwal</span></a>
        </li>
        @elseif(Auth::guard('peserta')->id())
        <li class="nav-item font-weight-bold">
        <a class="nav-link" href={{ route('jadwalpeserta',Auth::guard('peserta')->id())}}>
          <i class="fas fa-calendar-alt"style="color: white"></i>
          <span>Jadwal</span></a>
        </li>
      @endif
      @if(Auth::guard('pegawai')->id())
        <li class="nav-item font-weight-bold">
          <a class="nav-link" href="{{route('hasil',Auth::guard('pegawai')->id())}}">
            <i class="fas fa-file-signature" style="color: white"></i>
            <span>Hasil Ujian</span></a>
          </li>
          @elseif(Auth::guard('peserta')->id())
          <li class="nav-item font-weight-bold">
          <a class="nav-link" href="{{route('hasilpeserta',Auth::guard('peserta')->id())}}">
            <i class="fas fa-file-signature" style="color: white"></i>
            <span>Hasil Ujian</span></a>
          </li>
          @endif
        
      <!-- Divider -->

      {{-- <li class="nav-item font-weight-bold">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-boxes" style="color: white"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link" href="{{ route('paket.index') }}" style="color: blue">
                  <i class="fas fa-fw fa-boxes" style="color: blue"></i>
                  <span>Data Paket</span></a>
                  <a class="nav-link" href="{{ route('pelajaran.index') }}" style="color: blue">
                    <i class="fas fa-book-open" style="color: blue"></i>
                    <span>Data Pelajaran</span></a>
                    <a class="nav-link" href="{{ route('tes.index') }}" style="color: blue">
                      <i class="fas fa-diagnoses" style="color: blue"></i>
                      <span>Data Tes</span></a>
                      <a class="nav-link" href="{{ route('pengajar.index') }}" style="color: blue">
                        <i class="fas fa-chalkboard-teacher"style="color: blue"></i>
                        <span>Data Pengajar</span></a>
                        <a class="nav-link" href="{{ route('siswa.index') }}"style="color: blue">
                          <i class="fas fa-fw fa-users"style="color: blue"></i>
                          <span>Data Siswa</span></a>
            </div>
        </div>
    </li>

    <li class="nav-item font-weight-bold">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
          aria-expanded="true" aria-controls="collapse3">
          <i class="fas fa-chalkboard" style="color: white"></i>
          <span>Kelas</span>
      </a>
      <div id="collapse3" class="collapse" aria-labelledby="headingUtilities"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @if (auth()->user()->role != 'pengajar')
            <a class="nav-link" href="{{ route('kelas.index') }}"style="color: blue">
              <i class="fas fa-chalkboard"style="color: blue"></i>
              <span>Buat Kelas</span></a>
              @endif
            <a class="nav-link" href="{{ route('namkel.index') }}"style="color: blue">
              <i class="fas fa-chalkboard"style="color: blue"></i>
              <span>Data Kelas</span></a>
          </div>
      </div>
  </li>


      <li class="nav-item font-weight-bold">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4"
            aria-expanded="true" aria-controls="collapse4">
            <i class="fas fa-file-signature" style="color: white"></i>
            <span>Presensi</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="nav-link" href="{{ route('presensi.awal') }}" style="color: blue">
            <i class="fas fa-file-signature" style="color: blue"></i>
            <span>Data Presensi</span></a>
            <a class="nav-link" href="{{ route('rekap.awal') }}" style="color: blue">
              <i class="fas fa-file-signature" style="color: blue"></i>
              <span>Rekap Presensi</span></a>
        </div>
      </div>
      </li>

      <li class="nav-item font-weight-bold">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
            aria-expanded="true" aria-controls="collapse5">
            <i class="fas fa-calendar-alt" style="color: white"></i>
            <span>Jadwal</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              @if (auth()->user()->role != 'pengajar')
              <a class="nav-link" href="{{ route('penjadwalan.awal') }}"style="color: blue">
                <i class="fas fa-calendar-alt"style="color: blue"></i>
                <span>Buat Jadwal</span></a>
                @endif
                  <a class="nav-link" href="{{ route('penjadwalan.detail') }}"style="color: blue">
                    <i class="fas fa-calendar-alt"style="color: blue"></i>
                    <span>Data Jadwal</span></a>
            </div>
        </div>
    </li>--}}

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      
      </div>

    </ul>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <marquee scrolldelay="50" direction="right" style="color: blue"></marquee>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav">

            </ul>
            <ul class="na navbar-nav navbar-right"><li class="text-center mr-4 font-weight-bold" style="color: blue">
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                              this.closest('form').submit();">
                  {{ __('Logout') }}
            </a>
          </form></li>
              </ul>

        </nav>