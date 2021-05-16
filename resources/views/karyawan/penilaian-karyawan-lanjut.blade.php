@extends('layouts.karyawan')
@section('content')
<section class="section">
	<div class="card">
		<div class="row">
			<div class="col-2 col-md-4 col-lg-12">
				<div class="card-header">
					<h4>Penilaian Karyawan</h4>
				</div>
				<form action="/guru/penilaian-guru-lanjut" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
					@foreach($pertanyaan as $key => $pertanyaans)
						<div class="form-group">
							<label>{{$pertanyaans->pertanyaan}}</label>
							<input type="hidden" name="pertanyaanid[]" value="1">
						</div>
						
						<div class="form-group">
							<label class="form-label">Bobot</label>
							<div class="selectgroup w-100">
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="1" class="selectgroup-input" checked="">
									<span class="selectgroup-button">1</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="2" class="selectgroup-input">
									<span class="selectgroup-button">2</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="3" class="selectgroup-input">
									<span class="selectgroup-button">3</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="4" class="selectgroup-input">
									<span class="selectgroup-button">4</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="5" class="selectgroup-input">
									<span class="selectgroup-button">5</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="6" class="selectgroup-input">
									<span class="selectgroup-button">6</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="7" class="selectgroup-input">
									<span class="selectgroup-button">7</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="8" class="selectgroup-input">
									<span class="selectgroup-button">8</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="9" class="selectgroup-input">
									<span class="selectgroup-button">9</span>
								</label>
								<label class="selectgroup-item">
									<input type="radio" name="pertanyaan[{{$pertanyaans->id}}]" value="10" class="selectgroup-input">
									<span class="selectgroup-button">10</span>
								</label>
							</div>
						</div>

						@endforeach

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