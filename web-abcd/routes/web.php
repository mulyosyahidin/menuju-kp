<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StudentController;

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

// Route::get('/siswa', [SiswaController::class, 'index']);
// Route::get('/siswa/{id}', [SiswaController::class, 'lihat']);




Route::get('/contoh', function () {
    return view('students.index');
});


Route::get('/public', function () {
    return view('themes.impose.index');
});

Route::get('/contact', function () {
    return view('themes.impose.contact');
});

Route::get('/admin', function () {
    return view('themes.sb-admin2.index');
});

Route::get('/admin/students', [StudentController::class, 'index']);

Route::get('/siswa', fn () => view('siswa.index'));
Route::get('/siswa/tambah', fn () => view('siswa.tambah'));