@extends('layouts.master')
@section('content')
<section class="section">
	<div class="card">
		<div class="row">
			<div class="col-2 col-md-4 col-lg-12">
				<div class="card-header">
					<h4>Tambah Data Karyawan</h4>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Nama</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-user"></i>
								</div>
							</div>
							<input type="text" class="form-control phone-number">
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
							<input type="text" class="form-control phone-number">
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
							<input type="text" class="form-control phone-number">
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
							<input type="text" class="form-control phone-number">
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
							<input type="text" class="form-control phone-number">
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
							<select class="form-control">
								<option>........</option>
								<option>Tata Usaha</option>
								<option>Lain Nya</option>
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
							<input type="email" class="form-control email">
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
							<input type="password" class="form-control pwstrength" data-indicator="pwindicator">
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