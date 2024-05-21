<?php

use App\Http\Controllers\TaskController;
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

Route::get('/',function (){
    return view('adminPanel.index');
})->name('index');

Route::get('/index',function (){
    return view('adminPanel.index');
})->name('index');

Route::get('/form', function () {
    return view('adminPanel.form');
})->name('form');
Route::get('/edit/{id}', [TaskController::class,'edit'])->name('edit');


route::get('/data',[TaskController::class,'data']) -> name('data');
route::post('/sil/{id}',[TaskController::class,'sil']) -> name('sil');
route::post('/kaydet',[TaskController::class,'kaydet']) -> name('kaydet');
route::post('/guncelle/{id}',[TaskController::class,'guncelle']) -> name('guncelle');









