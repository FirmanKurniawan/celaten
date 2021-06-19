<!DOCTYPE html>
<!-- saved from url=(0044)http://siakad.trilogi.ac.id/gate/menu#siakad -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>SMK Negeri 1 Gunung Putri</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="siAkad Cloud solusi terbaik Perguruan Tinggi. Langsung Bisa Digunakan, Tidak Ribet dan Pelaporan Beres.">
        <meta name="keywords" content="">
        <meta name="author" content="siAkad Cloud">
        <!-- font Awesome -->
        <link href="/templatelogin/login/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Theme style -->

        <link href="/templatelogin/login/login-v2.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="img/png" href="/login/logosmk.png" sizes="16x16">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Custom fonts for this template-->


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="/assets/v1/js/external/html5shiv.js"></script>
          <script src="/assets/v1/js/external/respond.min.js"></script>
          <![endif]-->
        <?php 
            $tampilan = App\Tampilan::all();
           ?>
          @foreach($tampilan as $s)
        <style type="text/css">
            .login-page .form-box .univ-identity-box{
                background-size:cover;
            }
            html, body{
                background-size: cover;
            }
            .password{
                position: relative;
            }
            .showbtn {
                cursor:pointer;
                overflow: hidden;
                right: 15px;
                position: absolute;
                top: 10px;
                cursor:pointer;
            }
            .univ-identity-box {
                padding: 0 !important;
            }
            .univ-text-container {
                background-color: rgba(0, 88, 168, 0.8);
                bottom: 0;
                padding: 5px 30px 20px 30px;
                position: absolute;
                width: 100%;
            }
            .univ-text {
                position: relative !important;
                bottom: 0 !important;
            }
        </style>
        <style type="text/css">
</style>    </head>
    <body class="login-page" style="">
        @if(empty($q->foto2))
            <img src="{{asset('foto/tampilandashboard/sekolah.jpg')}}" style="height: 100%;width: 100%; background-size: cover;">
         @else
            <img src="{{url('foto/tampilandashboard/'. $s->foto2)}}" style="width: 100vw; height: 100vh; background-size: cover;">
        @endif
        <div class="container">
            <div class="row">
                <div class="form-box col-md-8 col-sm-10 col-xs-12">
                    <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 univ-identity-box">
                        @if(empty($q->foto1))
                                <img src="{{asset('foto/tampilandashboard/denahsmk.jpg')}}" style="height: 100%;width: 100%; background-size: cover;">
                                @else
                                <img src="{{url('foto/tampilandashboard/'. $s->foto1)}}" style="height: 100%;width: 100%; background-size: cover;">
                                @endif
                        <div class="univ-text-container">
                            <div class="univ-text">
                                <h4 class="welcome text-light">{{$s->text1}}</h4>
                                <div class="clearfix"></div>
                                <h2 class="no-margin text-light">{{$s->text2}}</h2>
                                <h3 class="no-margin"><b>{{$s->text3}}</b></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 form-login" align="center">
                        @if(empty($q->fotologo))
                                <img src="{{asset('foto/tampilandashboard/smk1.jpg')}}" class="logo"><br>
                                @else
                                <img src="{{url('foto/tampilandashboard/'. $s->fotologo)}}" class="logo"><br>
                                @endif
                        <h2 align="center" class="text-grey text-light">Silakan Login</h2><br>
                        @if (session('salah'))
                        <h3 align="center" class="text-grey text-light" style="color: red">Email/Password Salah!</h3><br>
                        @endif
                        <form method="POST" action="/login/proses-login">
                            @csrf

                            <div class="form-group">
                                <i class="fa fa-user icon-input"></i> 
                                <input type="email" name="email" id="userid" class="form-control input-line" placeholder="Masukan Email" required>
                            </div>
                            <div class="form-group">
                                <div class="password">
                                    <i style="margin-left:-20px;" class="fa fa-key icon-input"></i>
                                    <input type="password" id="password" name="password" class="form-control input-line" placeholder="Masukkan Kata Sandi" required>
                                    <span id="iconshow" name="iconshow" onclick="showPass()" class="showbtn fa fa-eye-slash"></span>
                                </div>
                            </div>       
                            <br>
                            <div class="form-group" align="center">
                                <button type="submit" class="btn btn-flat btn-primary ">Masuk Aplikasi <i class="fa fa-angle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery 2.0.2 -->
        <script type="text/javascript" async="" src="/templatelogin/login/analytics.js.download"></script><script src="./Universitas Trilogi_files/jquery.min.js.download"></script>
        <!-- Bootstrap -->
        <script src="/templatelogin/login/bootstrap.min.js.download" type="text/javascript"></script>        
            <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="/templatelogin/login/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91361426-5');
        gtag('set', {'user_id': '0000-'});
    </script>

        <script type="text/javascript">
                                        function showPass() {
                                            if (document.getElementById("password").type == 'password') {
                                                document.getElementById("password").type = 'text';
                                                document.getElementById("iconshow").classList.remove('fa-eye-slash');
                                                document.getElementById("iconshow").classList.add('fa-eye');
                                            } else {
                                                document.getElementById("password").type = 'password';
                                                document.getElementById("iconshow").classList.remove('fa-eye');
                                                document.getElementById("iconshow").classList.add('fa-eye-slash');
                                            }
                                        }
        </script>
</body>
@endforeach
</html>
