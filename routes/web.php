<?php

use App\Http\Controllers\perfumesController;
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

Route::get('/',[perfumesController::class, 'index'])->name('index');
route::get('/criar', function (){
    return view('perfumes');
});
Route::post('/criacao',[perfumesController::class, 'store']);
Route::get('/edit',[perfumesController::class, 'edit',]);
