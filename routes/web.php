<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\Front\ApplicationController;
use Illuminate\Support\Facades\Artisan;
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

require __DIR__ . '/auth.php';

Route::get('/', [ApplicationController::class, 'index'])->name('welcome');

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminController::class,'index'])->name('dashboard');
    Route::get('applications', [AdminController::class, 'GetAllApplication'])->name('applications');
    Route::get('ads/applications/{advertisement}', [AdvertisementController::class, 'Advertisment_Applications'])->name('advertisements.applications');
    Route::get('advertisements/active', [AdvertisementController::class, 'activeAds'])->name('advertisements.active');
    Route::resource('advertisements', AdvertisementController::class);
    Route::get('active/ad', [AdvertisementController::class, 'isActive_Ajax'])->name('isActive');
    Route::get('export/{advertisement}', [AdminController::class, 'export'])->name('export');
});
// public routes
Route::group(['prefix' => 'applicant', 'as' => 'front.'], function () {
    // Route::get('Ads/all', [ApplicationController::class, 'index'])->name('ads.all');
    Route::get('post/apply/{advertisement}', [ApplicationController::class, 'create'])->name('post.apply');
    Route::post('post/apply/store', [ApplicationController::class, 'store'])->name('post.store');
    Route::get('Ads/all', [ApplicationController::class, 'index'])->name('ads.index');
});
Route::get('/foo', function () {
    Artisan::call('storage:link');
});
