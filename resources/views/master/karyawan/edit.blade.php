@extends('layouts.master')
@section('content')
<section class="section">
	<div class="card">
		<div class="row">
			<div class="col-2 col-md-4 col-lg-12">
				<div class="card-header">
					<h4>Edit Data Guru</h4>
				</div>
				<form action="{{route('process_editkaryawan')}}" method="POST" enctype="multipart/form-data">
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
								<input type="text" class="form-control phone-number" name="name" placeholder="Nama Lengkap" value="{{$karyawans->name}}" required>
								<input type="hidden" class="form-control phone-number" name="role" value="{{$karyawans->role}}" required>
								<input type="hidden" class="form-control phone-number" name="id" value="{{$karyawans->id}}" required>
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
								<input type="number" class="form-control phone-number" name="nik" placeholder="Nomor Induk Kependudukan" value="{{$karyawans->nik}}" required>
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
								<input type="number" class="form-control phone-number" name="nip" placeholder="Nomor Induk Pegawai" value="{{$karyawans->nip}}" required>
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
								<input type="text" class="form-control phone-number" name="alamat" placeholder="Alamat" value="{{$karyawans->alamat}}" required>
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
								<input type="text" class="form-control phone-number" name="notlp" placeholder="Nomor Telepon" value="{{$karyawans->notlp}}" required>
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
								<select class="form-control" name="jabatan_id" required >
									<option selected>Pilih Jabatan...</option>
									<?php 
                                        use App\Katejabatan;
                                        $katejabatans = Katejabatan::where('role',4)->get();
                                    ?>
									@foreach($katejabatans as $j)
									@if($j->id == $karyawans->jabatan_id)
									<option value="{{$j->id}}" selected>{{$j->nama}}</option>
									@else
									<option value="{{$j->id}}">{{$j->nama}}</option>
									@endif
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
								<input type="email" class="form-control email" name="email" placeholder="Email" value="{{$karyawans->email}}" required>
							</div>
						</div>
						<div class="form-group">
							<label>Foto Diri</label>
							<center>
							<div class="form-group">
								<img src="{{url('foto/karyawan/'. $karyawans->foto)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
							</div>
							</center>
							<div class="input-group">
								<input type="file" class="form-control" id="inputCity" name="foto" onchange="readURL1(this);" value="{{$karyawans->foto}}">
							</div>
						</div>
						<div class="form-row" style="float: right;">
							<div class="form-group" style="float: right;">
								<button type="submit" class="btn btn-warning" style="float: right;"><i class="fa fa-add">Edit Data</i></button>
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