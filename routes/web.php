<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LukisanController;
use App\Http\Controllers\PelukisController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\UserController;
use App\Models\PeriodeBidding;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'authenticate']);

Route::get('/register', [AuthController::class,'showRegister']);
Route::post('/register', [AuthController::class,'register']);

Route::get('/logout', [AuthController::class,'logout']);

Route::get('/gallery', [GalleryController::class,'index']);
Route::get('/gallery/detail/{id}', [GalleryController::class, 'detail']);

Route::get('/event' , [EventController::class, 'index']);
Route::get('/event/detail/{id}',[GalleryController::class, 'detail']);

// Route::get('/admin' , function() {
//     return view('admin/dashboard');
// });

Route::get('/', function () {
    return view('user/landing', [
        'active' => 'home'
    ]);
});

// Route::group(['middleware' => ['auth','role:Admin']], function() {
    Route::prefix('admin')->group(function () {
        // Dasboard
        Route::get('/', [DashboardAdminController::class, 'index']);

        // Lukisan
        Route::controller(LukisanController::class)->group(function(){
            Route::get('/lukisan', 'index');
            Route::get('/lukisan-create', 'create');
            // Route::post('/category-store', 'store');
            // Route::get('/category-edit-{category}', 'edit');
            // Route::put('/category-update-{category}', 'update');
            // Route::get('/category-delete-{category}', 'delete');
           // Route::get('category/edit/{id}', 'edit');
        });

        Route::controller(PelukisController::class)->group(function(){
            Route::get('/pelukis', 'index');
            Route::get('/pelukis-create', 'create');
            Route::post('/pelukis-store', 'store');
            Route::get('/pelukis-edit-{pelukis}', 'edit');
            Route::post('/pelukis-update', 'update');
            Route::get('/pelukis-delete-{pelukis}', 'delete');
        });

        // Instansi
        Route::controller(InstansiController::class)->group(function(){
        Route::get('/instansi', 'index');
        Route::get('/instansi-create', 'create');
        Route::post('/instansi-store', 'store');
        Route::get('/instansi-edit-{instansi}', 'edit');
        Route::put('/instansi-update-{instansi}', 'update');
        Route::get('/instansi-delete-{instansi}', 'delete');

        // 
        });

        Route::controller(NotifikasiController::class)->group(function(){
            Route::get('/notifikasi', 'index');
             Route::get('/notifikasi-view-{contact}', 'view');
             Route::get('/notifikasi-delete-{contact}', 'delete');
         });

         Route::controller(UserController::class)->group(function(){
            Route::get('/user', 'index');
             Route::get('/user-view-{contact}', 'view');
             Route::get('/user-delete-{contact}', 'delete');
         });

         Route::controller(PeriodeController::class)->group(function(){
            Route::get('/periode', 'index');
            Route::get('/periode-create', 'create');
            Route::post('/periode-store', 'store');
            Route::get('/periode-edit-{periode}', 'edit');
            Route::put('/periode-update-{periode}', 'update');
            Route::get('/periode-delete-{periode}', 'delete');
         });


         

    });
// });

Route::controller(KontakController::class)->group(function(){
    Route::get('/kontak-create', 'create');
    Route::post('/kontak-store', 'store');
 });

