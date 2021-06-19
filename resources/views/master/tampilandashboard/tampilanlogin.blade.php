@extends('layouts.master')
@section('content')

<section class="section">

<div class="card">
				<form action="/master/tampilandashboard/updatetampilanlogin" method="POST" enctype="multipart/form-data">
					@csrf
		<div class="row">
					<?php 
						$tampilan = App\Tampilan::all();
					 ?>
					 @foreach ($tampilan as $q)
                    <input type="hidden" name="id" value="{{$q->id}}">
				<div class="card-header" style="margin-bottom: 5%;">
					<h4>Tampilan Dashboard Login</h4>
				</div>

				<div class="col-12 col-md-4 col-lg-4">
				<div class="form-group">
							<label>Text Pertama</label>
							<div class="input-group">
								<input type="text" class="form-control phone-number" name="text1" value="{{$q->text1}}" required>
							</div>
						</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
				<div class="form-group">
							<label>Text Kedua</label>
							<div class="input-group">
								<input type="text" class="form-control phone-number" name="text2" value="{{$q->text2}}" required>
							</div>
						</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
				<div class="form-group">
							<label>Text Ketiga</label>
							<div class="input-group">
								<input type="text" class="form-control phone-number" name="text3" value="{{$q->text3}}" required>
							</div>
						</div>
				</div>
<br><br>
			<div class="col-12 col-md-4 col-lg-4">

						<div class="form-group">
							<label>Foto Logo</label>
							<center>
							<div class="form-group">
								@if(empty($q->fotologo))
								<img src="{{asset('stisla/dist/assets/img/avatar/avatar-1.png')}}" alt="Nature" class="responsive" id="blah1" style="width: 60%;height: 60%; border-radius: 10%;">
								@else
								<img src="{{url('foto/tampilandashboard/'. $q->fotologo)}}" alt="Nature" class="responsive" id="blah1" style="width: 60%;height: 60%; border-radius: 10%;">
								@endif
							</div>
							</center>
							<div class="input-group">
								<input type="file" class="form-control" id="inputCity" name="fotologo" onchange="readURL1(this);" value="#">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-4">
					<div class="form-group">
							<label>Foto 1</label>
							<center>
							<div class="form-group">
								@if(empty($q->foto1))
								<img src="{{asset('stisla/dist/assets/img/avatar/avatar-1.png')}}" alt="Nature" class="responsive" id="blah2" style="width: 60%;height: 60%; border-radius: 10%;">
								@else
								<img src="{{url('foto/tampilandashboard/'. $q->foto1)}}" alt="Nature" class="responsive" id="blah2" style="width: 60%;height: 60%; border-radius: 10%;">
								@endif
							</div>
							</center>
							<div class="input-group">
								<input type="file" class="form-control" id="inputCity" name="foto1" onchange="readURL2(this);" value="#">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-4">
					<div class="form-group">
							<label>Foto 2</label>
							<center>
							<div class="form-group">
								@if(empty($q->foto2))
								<img src="{{asset('stisla/dist/assets/img/avatar/avatar-1.png')}}" alt="Nature" class="responsive" id="blah3" style="width: 60%;height: 60%; border-radius: 10%;">
								@else
								<img src="{{url('foto/tampilandashboard/'. $q->foto2)}}" alt="Nature" class="responsive" id="blah3" style="width: 60%;height: 60%; border-radius: 10%;">
								@endif
							</div>
							</center>
							<div class="input-group">
								<input type="file" class="form-control" id="inputCity" name="foto2" onchange="readURL3(this);" value="#">
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
<script type="text/javascript">
function readURL2(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#blah2')
.attr('src', e.target.result);
};
reader.readAsDataURL(input.files[0]);
}
}
</script>
<script type="text/javascript">
function readURL3(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#blah3')
.attr('src', e.target.result);
};
reader.readAsDataURL(input.files[0]);
}
}
</script>

@endsection