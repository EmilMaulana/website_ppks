<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>{{ $title }}</title>
  <link href="{{ asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/admin/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="background-color: #800000">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('assets/img/satgas-ppks.png') }}">
        </div>
        {{-- <div class="sidebar-brand-text mx-3">RuangAdmin</div> --}}
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/lapor">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Lapor</span></a>
      </li>
      @if (auth()->user()->is_admin == 1)
        <li class="nav-item">
          <a class="nav-link" href="/home/laporan-masuk">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan Masuk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home/artikel">
            <i class="fas fa-fw fa-blog"></i>
            <span>Artikel</span>
          </a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/home/profile">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Informasi Pribadi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home/riwayat-laporan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Riwayat Laporan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home/profile">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Favorit</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home/profile">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pusat Bantuan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home/profile">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Informasi Aplikasi</span>
          </a>
        </li>
      @endif
      
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('assets/img/img-profile.png') }}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{ auth()->user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                  <form action="{{ route('logout') }}" method="post" class="dropdown-item">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      {{ __('Logout') }}</button>
                    
                  </form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            
          </div>

        </div>
        <!---Container Fluid-->
        @yield('content')
      </div>


      <!-- Footer -->
      <footer class="sticky-footer bg-white mt-5">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            {{-- <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span> --}}
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/demo/chart-area-demo.js') }}"></script>  
</body>

</html>