@extends('layouts.master')
@section('content')
<section class="section">
	<div class="card">
		<div class="row">
			<div class="col-2 col-md-4 col-lg-12">
				<div class="card-header">
					<h4>Tambah Jadwal</h4>
				</div>
				<form action="/master/jadwal/add/karyawan" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>Pengguna</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="hidden" name="tipe" value="karyawan">
								<select class="form-control" name="user_id">
									<option selected>Silakan Pilih</option>
									@foreach($users as $user)
										@php
											$jabatan = \App\Katejabatan::where('id', $user->jabatan_id)->first();
										@endphp
									<option value="{{$user->id}}">{{$user->name}} - {{$jabatan->nama}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Tahun Akademik</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<select class="form-control" name="tahun_akademik_id" required>
									<option selected>Silakan Pilih</option>
									<?php 
										use App\Tahunakademik;
										$tahunakademik = Tahunakademik::all();
									 ?>
									@foreach($tahunakademik as $j)
									<option value="{{$j->id}}">{{$j->name}}-{{$j->keterangan}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal Mulai</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="date" class="form-control phone-number" name="tgl_awal_isi" placeholder="Tanggal Mulai" required>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal Selesai</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="date" class="form-control phone-number" name="tgl_akhir_isi" placeholder="Tanggal Selesai" required>
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
@endsection