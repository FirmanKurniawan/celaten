@extends('layouts.karyawan')
@section('content')
<section class="section">
	<div class="card">
		<div class="row">
			<div class="col-2 col-md-4 col-lg-12">
				<div class="card-header">
					<h4>Penilaian Karyawan</h4>
				</div>
				<form action="/karyawan/penilaian-karyawan" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>Foto Karyawan</label>
							<center>
							<div class="form-group">
								<img src="{{url('foto/karyawan/'.$user->foto)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
							</div>
							</center>
						<div class="form-group">
							<label>Apakah anda mengenal karyawan {{$user->name}}?</label>
							<input type="hidden" name="target" value="{{$karyawan->user_id}}">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fa fa-id-card"></i>
									</div>
								</div>
								<select class="form-control" name="pertanyaan1" required>
									<option value="1">Kenal</option>
									<option value="0">Tidak Kenal</option>
								</select>
							</div>
						</div>
						</div>
						<div class="form-row" style="float: right;">
							<div class="form-group" style="float: right;">
								<button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-add">Submit</i></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection