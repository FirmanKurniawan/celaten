<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/profile', function () {
    return view('master.guru.profile');
});



// Auth::routes();
Route::get('login', 'PageController@login')->name('login');
Route::get('logout', 'PageController@logout')->name('logout');
Route::prefix('login')->group(function(){
    Route::get('/register', 'PageController@register');
    Route::post('/proses-login', 'PageController@proses_login');
    Route::post('/proses-register', 'PageController@proses_register');
});



Route::group(['middleware' => 'auth'], function(){

	Route::group(['middleware' => 'master'], function(){
		Route::prefix('master')->group(function() {
			Route::get('jadwal', 'JadwalController@index');
			Route::get('jadwal/add/guru', 'JadwalController@add_guru');
			Route::get('jadwal/add/karyawan', 'JadwalController@add_karyawan');

			Route::post('jadwal/add/guru', 'JadwalController@process_add_guru');
			Route::post('jadwal/add/karyawan', 'JadwalController@process_add_karyawan');

			Route::get('/kepalasekolah', 'MasterController@indexkepsek');
			Route::get('/kepalasekolah/add', 'MasterController@addkepsek');
			Route::post('/kepalasekolah/add', 'MasterController@process_addkepsek');
			Route::get('/kepalasekolah/delete/{id}', 'MasterController@deletekepsek');
			Route::get('/kepalasekolah/edit/{id}/', 'MasterController@editkepsek');
			Route::post('/kepalasekolah/edit', 'MasterController@process_editkepsek')->name('process_editkepsek');

			Route::get('kepsek', 'KepsekController@dashboard');
			Route::get('kepsek/penilaian-guru', 'KepsekController@penilaian_guru');
			Route::get('kepsek/penilaian-karyawan', 'KepsekController@penilaian_karyawan');


			Route::get('/', 'MasterController@index');
			Route::get('/guru', 'MasterController@indexguru');
			Route::get('/guru/add', 'MasterController@addguru');
			Route::post('/guru/add', 'MasterController@process_addguru');
			Route::get('/guru/edit/{id}/', 'MasterController@editguru');
			Route::post('/guru/edit', 'MasterController@process_editguru');
			Route::get('/guru/delete/{id}', 'MasterController@deleteguru');


			Route::get('/karyawan', 'MasterController@indexkaryawan');
			Route::get('/karyawan/add', 'MasterController@addkaryawan');
			Route::post('/karyawan/add', 'MasterController@process_addkaryawan');
			Route::get('/karyawan/delete/{id}', 'MasterController@deletekaryawan');
			Route::get('/karyawan/edit/{id}/', 'MasterController@editkaryawan');
			Route::post('/karyawan/edit', 'MasterController@process_editkaryawan')->name('process_editkaryawan');

			Route::get('pertanyaan', 'PertanyaanController@index');
			Route::post('pertanyaan', 'PertanyaanController@process_pertanyaan');
			Route::get('/pertanyaan/delete/{id}', 'PertanyaanController@deletepertanyaan');
			Route::get('/pertanyaan/edit/{id}/', 'PertanyaanController@editpertanyaan');
			Route::post('/pertanyaan/update', 'PertanyaanController@update');

			Route::get('tahunakademik', 'TahunakademikController@index');
			Route::post('tahunakademik', 'TahunakademikController@process_tahunakademik');
			Route::get('/tahunakademik/delete/{id}', 'TahunakademikController@deletetahunakademik');
			Route::get('/tahunakademik/edit/{id}/', 'TahunakademikController@edittahunakademik');
			Route::post('/tahunakademik/update', 'TahunakademikController@update');
		});
	});

	Route::group(['middleware' => 'kepsek'], function(){
		Route::get('kepsek', 'KepsekController@dashboard');

		Route::get('/kepsek/nilai/{role}', 'KepsekController@hasil_nilai');

		Route::get('/kepsek/profile', 'ProfileController@index_kepsek');
    	Route::post('/kepsek/update_kepsek', 'ProfileController@update_kepsek');
	});

	Route::group(['middleware' => 'guru'], function(){
		Route::get('/', 'MasterController@index');
		Route::get('/guru', 'MasterController@indexguru');
		Route::get('/guru/add', 'MasterController@addguru');
		Route::post('/guru/add', 'MasterController@process_addguru');
		Route::get('/guru/edit/{id}/', 'MasterController@editguru');
		Route::post('/guru/edit', 'MasterController@process_editguru')->name('process_editguru');
		Route::get('/guru/delete/{id}', 'MasterController@deleteguru');

		Route::get('guru', 'GuruController@dashboard');
		Route::get('guru/penilaian-guru-lanjut', 'GuruController@lanjut_penilaian_guru');
		Route::post('guru/penilaian-guru-lanjut', 'GuruController@process_lanjut_penilaian_guru');
		Route::get('guru/penilaian-guru', 'GuruController@penilaian_guru');
		Route::post('guru/penilaian-guru', 'GuruController@process_penilaian_guru');

		Route::get('guru', 'GuruController@dashboard');

		Route::get('guru/penilaian-guru-lanjut', 'GuruController@lanjut_penilaian_guru');
		Route::post('guru/penilaian-guru-lanjut', 'GuruController@process_lanjut_penilaian_guru');

		Route::get('guru/penilaian-diri', 'GuruController@lanjut_penilaian_guru');
		Route::post('guru/penilaian-diri', 'GuruController@process_lanjut_penilaian_guru');

		Route::get('guru/penilaian-guru', 'GuruController@penilaian_guru');
		Route::post('guru/penilaian-guru', 'GuruController@process_penilaian_guru');
		
		Route::get('/guru/profile', 'ProfileController@index');
    	Route::post('/guru/update', 'ProfileController@update');


	});

	Route::group(['middleware' => 'karyawan'], function(){
		Route::get('/karyawan', 'MasterController@indexkaryawan');
		Route::get('/karyawan/add', 'MasterController@addkaryawan');
		Route::post('/karyawan/add', 'MasterController@process_addkaryawan');
		Route::get('/karyawan/delete/{id}', 'MasterController@deletekaryawan');
		Route::get('/karyawan/edit/{id}/', 'MasterController@editkaryawan');
		Route::post('/karyawan/edit', 'MasterController@process_editkaryawan')->name('process_editkaryawan');

		Route::get('karyawan', 'karyawanController@dashboard');
		Route::get('karyawan/penilaian-karyawan-lanjut', 'karyawanController@lanjut_penilaian_karyawan');
		Route::post('karyawan/penilaian-karyawan-lanjut', 'KaryawanController@process_lanjut_penilaian_karyawan');

		Route::get('karyawan/penilaian-karyawan', 'KaryawanController@penilaian_karyawan');
		Route::post('karyawan/penilaian-karyawan', 'KaryawanController@process_penilaian_karyawan');

		Route::get('karyawan/penilaian-diri', 'karyawanController@lanjut_penilaian_karyawan');
		Route::post('karyawan/penilaian-diri', 'KaryawanController@process_lanjut_penilaian_karyawan');


		Route::get('/karyawan/profile', 'ProfileController@index_karyawan');
    	Route::post('/karyawan/update_karyawan', 'ProfileController@update_karyawan');
	});
});

			Route::get('/master/katejabatan', 'KatejabatanController@index');
			Route::post('/master/katejabatan/add', 'KatejabatanController@add');
	        Route::get('/master/katejabatan/edit/{id}', 'KatejabatanController@edit');
	        Route::post('/master/katejabatan/update', 'KatejabatanController@update');
	        Route::get('/master/katejabatan/delete/{id}', 'KatejabatanController@delete');