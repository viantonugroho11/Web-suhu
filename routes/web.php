<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuhuController;
use App\Http\Controllers\PHController;
use App\Http\Controllers\CitraController;
use App\Http\Controllers\NutrisiController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\IntensitasController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/suhu', [SuhuController::class, 'showChart']);
Route::get('/nutrisi', [NutrisiController::class, 'index']);
Route::get('/ph', [PHController::class, 'index', 'nilai', 'waktu']);
Route::get('/intensitas', [IntensitasController::class, 'index']);
Route::get('/template', [TemplateController::class, 'index']);
Route::get('/citra', [CitraController::class, 'index']);

/*
Route::get('/ph', function () {
    return view('v_ph');
});

Route::get('/citra', function () {
    return view('v_citra');
});

Route::get('/nutrisi', function () {
    return view('v_nutrisi');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/suhu', function () {
    return view('v_suhu');
});

Route::get('/intensitas', function () {
    return view('v_intensitas');
});
Route::get('/template', function () {
    return view('layout.v_template');
});
 */
