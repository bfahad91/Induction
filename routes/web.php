<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Console\Application;
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


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
        Route::get('applications', [AdminController::class,'GetAllApplication'])->name('admin.applications');
        Route::get('ad/create', [AdminController::class,'CreateAd'])->name('ad.create');
        Route::post('ad/post', [AdminController::class,'PostAd'])->name('ad.post');
        Route::get('ads/list', [AdminController::class,'AdsList'])->name('ads.list');
        Route::get('ads/applications/{advertisement}', [AdminController::class,'AllApplications'])->name('ads.applications');
    });

});
    Route::get('Ads/all', [ApplicationController::class,'index'])->name('ads.all');
    Route::get('personal-Information/{advertisement}',[ApplicationController::class,'create'])->name('personal.info');
    Route::post('personal-Information/store',[ApplicationController::class,'store'])->name('personal.submit');
    Route::post('Ads/all',[ApplicationController::class,'index'])->name('ads.index');
    Route::get('Ad/user/store', [ApplicationController::class,'adUserStore'])->name('ad.user.store');
require __DIR__.'/auth.php';
