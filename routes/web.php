<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\usuarioController;
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
    return view('login');
})->middleware('guest')->name('login');

Route::any('log1', [loginController::class, 'login']);
Route::post('logout',[loginController::class,'cerrarSession']);


Route::get('home', function () {
    return  view('home');
})->middleware('auth');

Route::get('doc',function ()
{
    return view('document.homeFile');
})->middleware('auth')->name('inicio1');

Route::prefix('user')->group(function () {
     Route::get('/',[usuarioController::class,'index']);
     Route::get('/view',[usuarioController::class,'viewuser']);
     Route::any('/makeUser',[usuarioController::class,'makeUser']);
     Route::post('registerCliente',[usuarioController::class,'registerClie']);
});
