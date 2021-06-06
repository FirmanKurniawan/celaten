@extends('layouts.master')
@section('content')
<section class="section">
	<div class="card">
		<div class="row">
			<div class="col-2 col-md-4 col-lg-12">
				<div class="card-header">
					<h4>Tahun Akademik</h4>
				</div>
				<form action="/master/tahunakademik" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>Tahun</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="text" class="form-control phone-number" name="name" placeholder="Masukkan Pertanyaan" required>
							</div>
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="text" class="form-control phone-number" name="keterangan" placeholder="Masukkan Pertanyaan" required>
							</div>
						</div>
						<div class="form-row" style="float: right;">
							<div class="form-group" style="float: right;">
								<button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-add">Tambah</i></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


<div class="section-body">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="display nowrap" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Tahun Akademik</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($tahunakademiks as $s)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $s->name }}</td>
										<td>{{ $s->keterangan }}</td>
										<td>
											<a data-toggle="modal" data-target="#Edittahunakademik{{$s->id}}" class="btn btn-outline-warning">
							                  <i class="far fa-edit"></i>
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
@endsection

@foreach($tahunakademiks as $s)
  <div class="modal fade" id="Edittahunakademik{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data Tahun Akademik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/master/tahunakademik/update" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$s->id}}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tahun Akademik</label>
            <textarea name="name" class="form-control" required="">{{$s->name}}</textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" required="">{{$s->keterangan}}</textarea>
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