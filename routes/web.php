<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Site\HomeController as SiteHomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[SiteHomeController::class,'index']);

Route::prefix('painel')->group(function(){
    Route::get('/',[AdminHomeController::class,'index']);
});