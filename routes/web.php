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
Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});

Route::get('/', function () {
    return view('userpages.dashboard');
});

Route::get('/home', function () {
    return view('userpages.home');
});

Route::get('/datamaster', function () {
    return view('userpages.datamaster');
});

Route::get('/kegiatan1', function () {
    return view('userpages.kegiatan1');
});

Route::get('/pelaksanaan1', function () {
    return view('userpages.pelaksanaan1');
});

Route::get('/profil1', function () {
    return view('userpages.profil1');
});

Route::get('/setting1', function () {
    return view('userpages.setting1');
});

Route::get('/halamanutama', function () {
    return view('homepages.halamanutama');
});

Route::get('/forgot', function () {
    return view('homepages.forgot');
});

Route::get('/login', function () {
    return view('homepages.login');
});
