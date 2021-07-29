@extends('layouts.master')
@section('content')

<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/master/katejabatan/add" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kategori</label>
            <input type="text" class="form-control" name="nama" id="recipient-name" required="">
          </div>
          <div class="form-group">
          	<select class="form-control" name="role" required>
          		<option selected>Silakan Pilih</option>
          		<option value="1">Jajaran Kepala Sekolah</option>
          		<option value="2">Jajaran Guru</option>
          		<option value="3">Jajaran Karyawan</option>
          	</select>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
        </form>
      </div>
  </div>
</div>
</div>




<section class="section">

<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- <div class="card-header">
            <h4><b>Guru</b></h4>
          </div> -->
          <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
              <h6 class="m-0 font-weight-bold"><strong>Data Guru</strong></h6>
                <a href="#modaladd" data-toggle="modal">
              <button h class="btn btn-outline-primary">
                  <i class="fas fa-plus"></i>
              </button>
                </a>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="display nowrap" style="width:100%">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($katejabatan as $j)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$j->nama}}</td>
                            <td>{{$j->role}}</td>
                            <td>
                                <a data-toggle="modal" data-target="#EditJabatan{{$j->id}}" class="btn btn-outline-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="/master/katejabatan/delete/{{$j->id}}" class="btn btn-outline-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

@foreach($katejabatan as $j)
  <div class="modal fade" id="EditJabatan{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Udate Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/master/katejabatan/update" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$j->id}}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="nama" id="recipient-name" value="{{$j->nama}}" required="">
          </div>
          <div class="form-group">
            <select class="form-control" name="role" required>

                <option selected value="2">Jajaran Kepala Sekolah</option>
                <option value="3">Jajaran Guru</option>
                <option value="4">Jajaran Karyawan</option>
            </select>
          </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
        </form>
      </div>
  </div>
</div>
</div>
</div>
@endforeach



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