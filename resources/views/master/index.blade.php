@extends('layouts.master')
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
                    <h4>Total Kepala sekolah dan wakil</h4>
                  </div>
                  <div class="card-body">
                    <?php  
                        $total_kepsek = \App\User::where('role',1)->count();
                     ?>
                    {{$total_kepsek}}
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
                    <h4>Total Guru</h4>
                  </div>
                  <div class="card-body">
                    <?php  
                        $total_guru = \App\User::where('role',2)->count();
                     ?>
                    {{$total_guru}}
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
                    <h4>Total karyawan</h4>
                  </div>
                  <div class="card-body">
                    <?php  
                        $total_karyawan = \App\User::where('role',3)->count();
                     ?>
                    {{$total_karyawan}}
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
              <img src="{{ asset('foto/tampilandashboard/'.$s->foto) }}" style="width: 350px;height: 350px; margin-left: 100px;">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <p style="margin-top: 100px;"><b>{{$s->deskripsi}}</b></p>

            </div>
            
            
          </div>
          @endforeach
	</div>


        </section>

@endsection


@section('css')
<!-- CSS Libraries -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#example').DataTable( {
	dom: 'Bfrtip',
	buttons: [
	'copy', 'csv', 'excel', 'pdf', 'print'
	]
	} );
} );
</script>
@endsection