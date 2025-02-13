<?php

use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Donations;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;

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



Route::get('/',[homeController::class,"showCampaignsOnHome"]);
Route::middleware(['auth'])->group(function () {
Route::resource('campaign', controller: 'App\Http\Controllers\campaignController');
});

Route::get('/donasi',[DonasiController::class,"showCampaignsOnDonasi"]);
Route::middleware(['auth'])->group(function () {
Route::resource('campaign', 'App\Http\Controllers\campaignController');
});

// Route::get('/post',[postController::class,"index"]);
// Route::middleware(['auth'])->group(function () {
// Route::resource('post', 'App\Http\Controllers\postController');
// });

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/berita', [postController::class,'index']);
Route::get('/berita/{post:slug}', [postController::class, 'show']);


Route::get('/donate', function () {
    return view('campaign.donation');
});


// Route::get('/donasi', function () {
//     return view('donasi');
// });

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});


Route::get('/pay-status', function () {
    return view('pay-status');
});


Route::get('/dashboard', [homeController::class, "index"])->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';



Route::post('/makePayment', [Donations::class, "donate"]);

Route::post('/upload', [campaignController::class, "uploadCoverImage"]);