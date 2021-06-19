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
  <link rel="shortcut icon" href="{{asset('stisla/images/smk1.jpg')}}">

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
            <a href="#">SMK 1</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class=active><a class="nav-link" href="{{asset('master')}}"><i class="fas fa-fire"></i> <span>Home</span></a></li>
            
            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Tambah User</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{asset('master/kepalasekolah')}}">Tambah Kepala Sekolah</a></li>
                <li><a class="nav-link" href="{{asset('master/guru')}}">Tambah Guru</a></li>
                <li><a class="nav-link" href="{{asset('master/karyawan')}}">Tambah Karyawan</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="{{asset('master/katejabatan')}}"><i class="far fa-address-card"></i> <span>Kategori Jabatan</span></a></li>
            <li><a class="nav-link" href="{{asset('master/tahunakademik')}}"><i class="far fa-calendar"></i> <span>Tahun Akademik</span></a></li>     
            <li><a class="nav-link" href="{{asset('master/pertanyaan')}}"><i class="far fa-question-circle"></i> <span>Membuat Pertanyaan</span></a></li>     
            <li><a class="nav-link" href="{{asset('master/jadwal')}}"><i class="far fa-calendar-check"></i> <span>Jadwal Penilaian</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-star"></i><span>Tampilan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{asset('master/tampilandashboard')}}">Tampilan Dashboard</a></li>
                <li><a class="nav-link" href="{{asset('master/tampilanlogin')}}">Tampilan Login</a></li>
              </ul>
            </li>  
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

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('stisla/dist/assets/js/scripts.js')}}"></script>
  <script src="{{asset('stisla/dist/assets/js/custom.js')}}"></script>


  <script type="text/javascript">
function readURL1(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#blah1')
.attr('src', e.target.result);
};
reader.readAsDataURL(input.files[0]);
}
}
</script>
<script type="text/javascript">
function readURL2(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#blah2')
.attr('src', e.target.result);
};
reader.readAsDataURL(input.files[0]);
}
}
</script>
<script type="text/javascript">
function readURL3(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#blah3')
.attr('src', e.target.result);
};
reader.readAsDataURL(input.files[0]);
}
}
</script>


 @yield('js')

</body>
</html>