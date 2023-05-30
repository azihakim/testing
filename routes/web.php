<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengirimanController;

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


// Route::get('/', function () {
//     return view('dashboard.dashboard');
// });

Route::get('formPengiriman', function () {
    return view('forms.formPengiriman');
});

Route::get('form-masuk', function () {
    return view('forms.formMasuk');
})->name('formMasuk');

Route::resource('/pengiriman', PengirimanController::class);
Route::resource('/stokKeluar', StokkeluarController::class);

Route::resource('/', DashboardController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/dashboardKeluar', DashboardstokkeluarController::class);
