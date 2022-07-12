<?php
use App\Http\Controller\GeneroController;
use Illuminate\Support\Facades\Route;
//Para que funcione la API
//use Illuminate\Support\Facades\Auth;

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

Route::get('/genero/crear',[GeneroController::class,'create']);
