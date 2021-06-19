@extends('layouts.master')
@section('content')

<section class="section">

<div class="card">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-6">
				<div class="card-header">
					<h4>Tampilan Dashboard</h4>
				</div>
				<form action="/master/tampilandashboard/updatetampilan" method="POST" enctype="multipart/form-data">
					@csrf
					<?php 
						$tampilan = App\Tampilan::all();
					 ?>
					 @foreach ($tampilan as $q)
                    <input type="hidden" name="id" value="{{$q->id}}">
                    <br><br><br>
					<div class="card-body">
						<div class="form-group">
							<label>DesKripsi</label><br><br><br>
							<div class="input-group">
								<textarea class="form-control" name="deskripsi" placeholder="Nama Lengkap">{{$q->deskripsi}}</textarea>
							</div>
						</div>
					</div>
				</div>


						<div class="col-12 col-md-6 col-lg-6" style="margin-top: 15%;">
						<div class="form-group">
							<label>Foto</label>
							<center>
							<div class="form-group">
								<img src="{{url('foto/tampilandashboard/'. $q->foto)}}" alt="Nature" class="responsive" id="blah1" style="width: 60%;height: 60%; border-radius: 10%;">
							</div>
							</center>
							<div class="input-group">
								<input type="file" class="form-control" id="inputCity" name="foto" onchange="readURL1(this);" value="{{$q->foto}}">
							</div>
						</div>
						<div class="form-row" style="float: right;">
							<div class="form-group" style="float: right;">
								<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-left: 15%;"><i class="fa fa-add">Simpan</i></button>
							</div>
						</div>
					</div>
					@endforeach


					</div>
				</form>
			</div>
		</div>
	</div>
</section>
		</div>
	</div>
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

@endsection