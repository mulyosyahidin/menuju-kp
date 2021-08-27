<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SiswaController;

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

Route::get('/users', fn () => 'Halo, ini route users');

// Route::get('/data', function () {
    //     return 'Halo ini di route /data';
// });

Route::get('/data', [DataController::class, 'index']);
Route::get('/data/create', [DataController::class, 'tambah']);

Route::get('/data/show/{nama}/{usia}', [DataController::class, 'show']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/{id}', [SiswaController::class, 'lihat']);




Route::get('/contoh', function () {
    return view('students.index');
});
