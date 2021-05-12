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

Route::get('/', function () {
    return view('login.login');
});



Route::prefix('master')->group(function() {
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
	Route::post('/guru/edit', 'MasterController@process_editguru')->name('process_editguru');
	Route::get('/guru/delete/{id}', 'MasterController@deleteguru');


	Route::get('/karyawan', 'MasterController@indexkaryawan');
	Route::get('/karyawan/add', 'MasterController@addkaryawan');
	Route::post('/karyawan/add', 'MasterController@process_addkaryawan');
	Route::get('/karyawan/delete/{id}', 'MasterController@deletekaryawan');
	Route::get('/karyawan/edit/{id}/', 'MasterController@editkaryawan');
	Route::post('/karyawan/edit', 'MasterController@process_editkaryawan')->name('process_editkaryawan');
});
