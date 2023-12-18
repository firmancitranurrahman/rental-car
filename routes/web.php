<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\RolePermissionController;

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


Route::get('/index',[UserController::class,'index'])->name('index');

// ===== USER ===== //
Route::get('/tambahdatauser',[UserController::class,'tambahdatauser'])->name('tambahdatauser');
Route::get('/listdatauser',[UserController::class,'listdatauser'])->name('listdatauser');
Route::post('/storeuser',[UserController::class,'storeuser'])->name('storeuser');


//==== MOBIL ==== //
Route::get('/listdatamobil',[MobilController::class,'listdatamobil'])->name('listdatamobil');
Route::get('/tambahdatamobil',[MobilController::class,'tambahdatamobil'])->name('tambahdatamobil');
Route::post('/storemobil',[MobilController::class,'storemobil'])->name('storemobil');

//==== SEWA ==== //
Route::middleware(['auth','role:user'])->group(function(){
    
});



// Route::post('/ceknik', [PasienController::class,'ceknik'])->name('ceknik');

Route::get('/logout',function(){
    auth::logout();
    return redirect('login');
})->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
