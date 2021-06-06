@extends('layouts.master')
@section('content')
<section class="section">
	<div class="card">
		<div class="row">
			<div class="col-2 col-md-4 col-lg-12">
				<div class="card-header">
					<h4>Tambah Data Kelapa Sekolah dan Wakil Kepala Sekolah</h4>
				</div>
				<form action="/master/kepalasekolah/add" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>Nama</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="text" class="form-control phone-number" name="name" placeholder="Nama Lengkap" required>
								<input type="hidden" class="form-control phone-number" name="role" value="1" required>
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
								<input type="number" class="form-control phone-number" name="nik" placeholder="Nomor Induk Kependudukan" required>
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
								<input type="number" class="form-control phone-number" name="nip" placeholder="Nomor Induk Pegawai" required>
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
								<input type="text" class="form-control phone-number" name="alamat" placeholder="Alamat" required>
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
								<input type="text" class="form-control phone-number" name="notlp" placeholder="Nomor Telepon" required>
							</div>
						</div>
						<div class="form-group">
							<label>Jabatan</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<select class="form-control" name="jabatan_id" required>
									<option selected>Silakan Pilih</option>
									<?php 
										use App\Katejabatan;
										$katejabatan = Katejabatan::where('role',2)->get();
									 ?>
									@foreach($katejabatan as $j)
									<option value="{{$j->id}}">{{$j->nama}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Email</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-envelope"></i>
									</div>
								</div>
								<input type="email" class="form-control email" name="email" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-lock"></i>
									</div>
								</div>
								<input type="password" class="form-control pwstrength" name="password" data-indicator="pwindicator" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group">
							<label>Foto Diri</label>
							<center>
							<div class="form-group">
								<img src="{{asset('stisla/images/avatar.png')}}" alt="Nature" class="responsive" id="blah1" style="width: 200px;height: 200px;">
							</div>
							</center>
							<div class="input-group">
								<input type="file" class="form-control" id="inputCity" name="foto" onchange="readURL1(this);">
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
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('duplicate'))
    <script>
        $(document).ready(
            swal('Email/NIP/NIK Anda Harus UNIK!', 'Silakan klik tombol ok!', 'error')
        );
    </script>
@endif
@endsection