<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FeedAdminController;
use App\Http\Controllers\ShareController;
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

Route::prefix('/feed')->middleware(['auth'])->group(function(){
    Route::get('/', [FeedController::class, 'feed'])->name('feed');
    Route::resources([
        'posts' => FeedAdminController::class,
    ]);
});

Route::get('/share', [ShareController::class, 'share'],  function(){})->middleware(['auth'])->name('share');
require __DIR__.'/auth.php'; 
