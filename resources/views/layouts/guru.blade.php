<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SMK Negeri 1 Gunung Putri</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/dist/assets/css/skins/customDataTable.css')}}">

  <!-- CSS Libraries -->
  @yield('css')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('stisla/dist/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/dist/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{asset('stisla/dist/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
            <?php 
              $name = \App\User::where('id', Auth::user()->id)->first();
            ?>
            <div class="d-sm-none d-lg-inline-block">{{$name->name}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Selamat Datang</div>
              <a href="{{url('guru/profile')}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2"><br>
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img src="{{asset('stisla/images/smk1.jpg')}}" style="width: 30%; height: 120%;">&nbsp;
            <a href="#">SMK N 1 G.Putri</a>
          </div><br><br>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class=active><a class="nav-link" href="{{url('guru/')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            @php
              $guru = \App\Jadwal::where('id', 1)->first();
            @endphp

            @if($guru->user_id != Auth::user()->id)
            <li><a class="nav-link" href="{{url('guru/penilaian-guru')}}"><i class="fas fa-fire"></i> <span>Penilaian Guru</span></a></li>
            @endif

            @if($guru->user_id === Auth::user()->id)
            <li><a class="nav-link" href="{{url('guru/penilaian-diri')}}"><i class="fas fa-fire"></i> <span>Penilaian Diri</span></a></li>
            @endif

          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('stisla/dist/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('stisla/dist/assets/modules/popper.js')}}"></script>
  <script src="{{asset('stisla/dist/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('stisla/dist/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('stisla/dist/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  @yield('js')

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('stisla/dist/assets/js/scripts.js')}}"></script>
  <script src="{{asset('stisla/dist/assets/js/custom.js')}}"></script>
</body>
</html>