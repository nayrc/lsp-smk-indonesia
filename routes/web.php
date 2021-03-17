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

// ADMIN
Route::get('pageloginadmin', 'autentikasi\LoginAdminController@index')->name('pageloginadmin');
Route::post('loginadmin', 'autentikasi\LoginAdminController@login')->name('loginadmin');
Route::get('logoutadmin', 'autentikasi\LoginAdminController@logout')->name('logoutadmin');
Route::get('admin', function () {
    return view('admin.index');
})->middleware('IsAdmin');

// GURU
Route::get('pageloginguru', 'autentikasi\LoginGuruController@index')->name('pageloginguru');
Route::post('loginguru', 'autentikasi\LoginGuruController@login')->name('loginguru');
Route::get('logoutguru', 'autentikasi\LoginGuruController@logout')->name('logoutguru');
Route::get('guru', function () {
    return view('guru.index');
})->middleware('IsGuru');

// SISWA
Route::get('pageloginsiswa', 'autentikasi\LoginSiswaController@index')->name('pageloginsiswa');
Route::post('loginsiswa', 'autentikasi\LoginSiswaController@login')->name('loginsiswa');
Route::get('logoutsiswa', 'autentikasi\LoginSiswaController@logout')->name('logoutsiswa');
Route::get('siswa', function () {
    return view('siswa.index');
})->middleware('IsSiswa');
