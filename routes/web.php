<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AgrcController;
use App\Http\Controllers\PenaController;
use App\Http\Controllers\HimpunanController;
use App\Http\Controllers\PomaController;
use App\Http\Controllers\PmkController;
use App\Http\Controllers\LdkController;
use App\Http\Controllers\Auth\AuthController;



// Halaman login
Route::get('/login', function () {
    return view('Auth.Login');
})->middleware('guest')->name('login');
Route::post('/login-proses', [AuthController::class, 'login'])->name('loginproccess');

// Akses untuk yang sudah login
Route::middleware('auth')->group(function () {
    Route::middleware('role:admin,agrc')->group(function () {
        Route::prefix('agrc')->group(function () {
            Route::get('/', [AgrcController::class, 'index'])->name('getalldataagrc');
            Route::get('/create', [AgrcController::class, 'createForm'])->name('createFormAgrc');
            Route::post('/create', [AgrcController::class, 'createData'])->name('createDataAgrc');
            Route::get('/edit/{id}', [AgrcController::class, 'getDataById'])->name('getDataByIdAgrc');
            Route::post('/update/{id}', [AgrcController::class, 'updateData'])->name('updateDataAgrc');
            Route::delete('/delete/{id}', [AgrcController::class, 'deleteData'])->name('deleteDataAgrc');
        });
    });

    
        Route::middleware('role:admin,pena')->group(function () {
            Route::prefix('pena')->group(function () {
                Route::get('/', [PenaController::class, 'index'])->name('getalldatapena');
                Route::get('/create', [PenaController::class, 'createForm'])->name('createFormPena');
                Route::post('/create', [PenaController::class, 'createData'])->name('createDataPena');
                Route::get('/edit/{id}', [PenaController::class, 'getDataById'])->name('getDataByIdPena');
                Route::post('/update/{id}', [PenaController::class, 'updateData'])->name('updateDataPena');
                Route::delete('/delete/{id}', [PenaController::class, 'deleteData'])->name('deleteDataPena');
            });
        });

        Route::middleware('role:admin,himpunan')->group(function () {
            Route::prefix('himpunan')->group(function () {
                Route::get('/', [HimpunanController::class, 'index'])->name('getalldatahimpunan');
                Route::get('/create', [HimpunanController::class, 'createForm'])->name('createFormHimpunan');
                Route::post('/create', [HimpunanController::class, 'createData'])->name('createDataHimpunan');
                Route::get('/edit/{id}', [HimpunanController::class, 'getDataById'])->name('getDataByIdHimpunan');
                Route::post('/update/{id}', [HimpunanController::class, 'updateData'])->name('updateDataHimpunan');
                Route::delete('/delete/{id}', [HimpunanController::class, 'deleteData'])->name('deleteDataHimpunan');
            });
        });

        Route::middleware('role:admin,poma')->group(function () {
            Route::prefix('poma')->group(function () {
                Route::get('/', [PomaController::class, 'index'])->name('getalldatapoma');
                Route::get('/create', [PomaController::class, 'createForm'])->name('createFormPoma');
                Route::post('/create', [PomaController::class, 'createData'])->name('createDataPoma');
                Route::get('/edit/{id}', [PomaController::class, 'getDataById'])->name('getDataByIdPoma');
                Route::post('/update/{id}', [PomaController::class, 'updateData'])->name('updateDataPoma');
                Route::delete('/delete/{id}', [PomaController::class, 'deleteData'])->name('deleteDataPoma');
            });
        });

        Route::middleware('role:admin,pmk')->group(function () {
            Route::prefix('pmk')->group(function () {
                Route::get('/', [PmkController::class, 'index'])->name('getalldatapmk');
                Route::get('/create', [PmkController::class, 'createForm'])->name('createFormPmk');
                Route::post('/create', [PmkController::class, 'createData'])->name('createDataPmk');
                Route::get('/edit/{id}', [PmkController::class, 'getDataById'])->name('getDataByIdPmk');
                Route::post('/update/{id}', [PmkController::class, 'updateData'])->name('updateDataPmk');
                Route::delete('/delete/{id}', [PmkController::class, 'deleteData'])->name('deleteDataPmk');
            });
        });

        Route::middleware('role:admin,ldk')->group(function () {
            Route::prefix('ldk')->group(function () {
                Route::get('/', [LdkController::class, 'index'])->name('getalldataldk');
                Route::get('/create', [LdkController::class, 'createForm'])->name('createFormLdk');
                Route::post('/create', [LdkController::class, 'createData'])->name('createDataLdk');
                Route::get('/edit/{id}', [LdkController::class, 'getDataById'])->name('getDataByIdLdk');
                Route::post('/update/{id}', [LdkController::class, 'updateData'])->name('updateDataLdk');
                Route::delete('/delete/{id}', [LdkController::class, 'deleteData'])->name('deleteDataLdk');
            });
        });

    Route::middleware('role:admin')->group(function () {
        Route::get('/', [MahasiswaController::class, 'dashboard'])->name('dashboard');
});

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
