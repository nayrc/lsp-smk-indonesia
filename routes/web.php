<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

// Auth ADMIN
Route::get('pageloginadmin', 'autentikasi\LoginAdminController@index')->name('pageloginadmin');
Route::post('loginadmin', 'autentikasi\LoginAdminController@login')->name('loginadmin');
Route::get('logoutadmin', 'autentikasi\LoginAdminController@logout')->name('logoutadmin');

// Auth GURU
Route::get('pageloginguru', 'autentikasi\LoginGuruController@index')->name('pageloginguru');
Route::post('loginguru', 'autentikasi\LoginGuruController@login')->name('loginguru');
Route::get('logoutguru', 'autentikasi\LoginGuruController@logout')->name('logoutguru');

// Auth SISWA
Route::get('pageloginsiswa', 'autentikasi\LoginSiswaController@index')->name('pageloginsiswa');
Route::post('loginsiswa', 'autentikasi\LoginSiswaController@login')->name('loginsiswa');
Route::get('logoutsiswa', 'autentikasi\LoginSiswaController@logout')->name('logoutsiswa');

Route::group(['middleware' => 'IsAdmin'], function () {
    Route::get('admin', function () {
        return view('admin.index');
    })->name('admin.home');

    // Jurusan
    Route::get('admin/jurusan', 'admin\JurusanController@index')->name('admin.jurusan');
    Route::post('admin/jurusan', 'admin\JurusanController@add')->name('admin.jurusan.add');
    Route::get('admin/jurusan/{id}/edit', 'admin\JurusanController@edit')->name('admin.jurusan.edit');
    Route::patch('admin/jurusan/{id}', 'admin\JurusanController@update')->name('admin.jurusan.update');
    Route::delete('admin/jurusan/{id}', 'admin\JurusanController@delete')->name('admin.jurusan.delete');

    // Kelas
    Route::get('admin/kelas', 'admin\KelasController@index')->name('admin.kelas');
    Route::post('admin/kelas', 'admin\KelasController@add')->name('admin.kelas.add');
    Route::get('admin/kelas/{id}/edit', 'admin\KelasController@edit')->name('admin.kelas.edit');
    Route::patch('admin/kelas/{id}', 'admin\KelasController@update')->name('admin.kelas.update');
    Route::delete('admin/kelas/{id}', 'admin\KelasController@delete')->name('admin.kelas.delete');

    // Mapel
    Route::get('admin/mapel', 'admin\MapelController@index')->name('admin.mapel');
    Route::post('admin/mapel', 'admin\MapelController@add')->name('admin.mapel.add');
    Route::get('admin/mapel/{id}/edit', 'admin\MapelController@edit')->name('admin.mapel.edit');
    Route::patch('admin/mapel/{id}', 'admin\MapelController@update')->name('admin.mapel.update');
    Route::delete('admin/mapel/{id}', 'admin\MapelController@delete')->name('admin.mapel.delete');
});


Route::get('guru', function () {
    return view('guru.index');
})->middleware('IsGuru');

Route::get('siswa', function () {
    return view('siswa.index');
})->middleware('IsSiswa');
