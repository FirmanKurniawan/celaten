@extends('layouts.kepsek')
@section('content')
<section class="section">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-items">
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Guru Dan Kaprok</h4>
                  </div>
                  <div class="card-body">
                    <?php  
                        $total_guru = \App\User::where('role',3)->count();
                     ?>
                    {{$total_guru}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-items">
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-user-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Karyawan</h4>
                  </div>
                  <div class="card-body">
                    <?php  
                        $total_karyawan = \App\User::where('role',4)->count();
                     ?>
                    {{$total_karyawan}}
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table id="example" class="display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Target</th>
                    <th>Penilai</th>
                    <th>Total Bobot</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($penilaians as $penilaian)
                  @php
                    $penilai = \App\User::find($penilaian->userid);
                    $target = \App\User::find($penilaian->target);
                  @endphp
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$target->name}}</td>
                    <td>{{$penilai->name}}</td>
                    <td>{{$penilaian->bobot}}</td>
                    <td>{{$penilaian->tanggal}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
            </div>
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