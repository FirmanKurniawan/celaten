@extends('layouts.guru')
@section('content')
<section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-items">
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Orders</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-items">
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Orders</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-items">
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Orders</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php 
            $tampilan = App\Tampilan::all();
           ?>
          @foreach($tampilan as $s)
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              @if(empty($s->foto))
              <img src="{{asset('stisla/images/smk1.jpg')}}" style="width: 350px;height: 350px; margin-left: 100px;">
              @else
              <img src="{{ asset('foto/tampilandashboard/'.$s->foto) }}" style="width: 350px;height: 350px; margin-left: 100px;">
              @endif

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <p style="margin-top: 100px;"><b>{{$s->deskripsi}}</b></p>

            </div>
            
            
          </div>
          @endforeach

          
        </section>
@endsection
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('success'))
    <script>
        $(document).ready(
            swal('Selamat anda telah mengisi penilaian', 'Silakan klik tombol ok!', 'success')
        );
    </script>
@endif
@if (session('expired'))
    <script>
        $(document).ready(
            swal('Mohon maaf waktu penilaian sudah habis!', 'Silakan klik tombol ok!', 'error')
        );
    </script>
@endif
@if (session('isi'))
    <script>
        $(document).ready(
            swal('Mohon maaf anda telah mengisi penilaian!', 'Silakan klik tombol ok!', 'error')
        );
    </script>
@endif
@if (session('belum-isi'))
    <script>
        $(document).ready(
            swal('Anda belum mengisi penilaian!', 'Silakan klik tombol ok!', 'error')
        );
    </script>
@endif
@endsection