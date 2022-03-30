<?php

use App\Http\Controllers\ListNewsWebController;
use App\Http\Controllers\ListPageWebController;
use App\Http\Controllers\NewsWebController;
use App\Http\Controllers\PageWebController;
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

Route::get('/page', ListPageWebController::class);
Route::get('/page/{slug}', PageWebController::class);

Route::get('/news', ListNewsWebController::class);
Route::get('/news/{slug}', NewsWebController::class);
