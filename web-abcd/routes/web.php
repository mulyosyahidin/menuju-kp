<?php

use App\Http\Controllers\Operator\BarangController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'role:operator'])->as('operator.')->prefix('op')->group(function () {
    Route::get('/test-operator', function () {
        return 'Ini operator';
    });

    Route::get('/', fn () => view('themes.sb-admin2.operator.index'));

    Route::get('/barang', [BarangController::class, 'index'])->name('barang');


    Route::get('/barang/tambah', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang/simpan', [BarangController::class, 'store'])->name('barang.store');

    Route::get('/barang/{barang}', [BarangController::class, 'show'])->name('barang.show');

    Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/barang/{barang}/update', [BarangController::class, 'update'])->name('barang.update');

    Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/test-admin', function () {
        return 'Ini admin';
    });

    //semua route dalam grup ini hanya bisa diakses admin
});
