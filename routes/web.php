<?php

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

use App\Http\Controllers\AlunosController;

Route::get('/alunos', [AlunosController::class,'index']);

Route::get('/alunos/novo', [AlunosController::class,'create']);
Route::post('/alunos/novo', [AlunosController::class,'store']) ->name('registrar');





