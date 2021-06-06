@extends('layouts.kepsek')
@section('content')

<section class="section">

<div class="card">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-6">
				<div class="card-header">
					<h4>Data Profile</h4>
				</div>
				<form action="/kepsek/update_kepsek" method="POST" enctype="multipart/form-data">
					@csrf
					<?php 
						$q = App\User::find(Auth::user()->id);
					 ?>
                    <input type="hidden" name="id" value="{{$q->id}}">

					<div class="card-body">
						<div class="form-group">
							<label>Nama</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="text" class="form-control phone-number" name="name" placeholder="Nama Lengkap" value="{{$q->name}}" required>
							</div>
						</div>
						<div class="form-group">
							<label>NIK</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-id-card"></i>
									</div>
								</div>
								<input type="number" class="form-control phone-number" name="nik" placeholder="Nomor Induk Kependudukan" value="{{$q->nik}}" required>
							</div>
						</div>
						<div class="form-group">
							<label>NIP</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fa fa-id-card"></i>
									</div>
								</div>
								<input type="number" class="form-control phone-number" name="nip" placeholder="Nomor Induk Pegawai" value="{{$q->nip}}" required>
							</div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-map-marker"></i>
									</div>
								</div>
								<input type="text" class="form-control phone-number" name="alamat" placeholder="Alamat" value="{{$q->alamat}}" required>
							</div>
						</div>
						<div class="form-group">
							<label>Nomor Telepon</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-phone"></i>
									</div>
								</div>
								<input type="text" class="form-control phone-number" name="notlp" placeholder="Nomor Telepon" value="{{$q->notlp}}" required>
							</div>
						</div>
					</div>
				</div>


						<div class="col-12 col-md-6 col-lg-6" style="margin-top: 15%;">
						<div class="form-group">
							<label>Foto Diri</label>
							<center>
							<div class="form-group">
								@if(empty($q->foto))
								<img src="{{asset('stisla/dist/assets/img/avatar/avatar-1.png')}}" alt="Nature" class="responsive" id="blah1" style="width: 50%;height: 50%; border-radius: 10%;">
								@else
								<img src="{{url('foto/kepsek/'. $q->foto)}}" alt="Nature" class="responsive" id="blah1" style="width: 50%;height: 50%; border-radius: 10%;">
								@endif
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



					</div>
				</form>
			</div>
		</div>
	</div>
</section>
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