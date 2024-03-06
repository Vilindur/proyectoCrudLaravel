<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', function() {
    return view('welcome');
});

//FORMA 1 - Todo en 1
Route::resource('/canciones', CrudController::class);

//FORMA 2 - 1 a 1 método
// Route::get('canciones', [CrudController::class, 'index']);
// Route::get('canciones/create', [CrudController::class, 'create']);
