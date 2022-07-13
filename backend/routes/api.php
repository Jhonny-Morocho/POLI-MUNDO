<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Controllers
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\CancionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/genero',[GeneroController::class,'index']);
Route::get('/cancion',[CancionController::class,'index']);

Route::get('/cancion/{id}',[CancionController::class,'show']);
Route::get('/genero/{id}',[GeneroController::class,'show']);
