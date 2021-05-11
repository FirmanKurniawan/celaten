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
    return view('welcome');
});


Route::get('master', 'MasterController@index');
Route::get('master/guru', 'MasterController@indexguru');
Route::get('master/guru/add', 'MasterController@addguru');
Route::post('master/guru/add', 'MasterController@process_addguru');
Route::get('master/karyawan', 'MasterController@indexkaryawan');
Route::get('master/karyawan/add', 'MasterController@addkaryawan');
Route::post('master/karyawan/add', 'MasterController@process_addkaryawan');
Route::get('master/kepalasekolah', 'MasterController@indexkepsek');
Route::get('master/kepalasekolah/add', 'MasterController@addkepsek');
Route::post('master/kepalasekolah/add', 'MasterController@process_addkepsek');


Route::get('kepsek', 'KepsekController@dashboard');
Route::get('kepsek/penilaian-guru', 'KepsekController@penilaian_guru');
Route::get('kepsek/penilaian-karyawan', 'KepsekController@penilaian_karyawan');
