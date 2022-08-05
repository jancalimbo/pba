<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DetailController;
// use App\Http\Controllers\IngredientController;

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
    return inertia('Home');
});


//navbar
Route::get('/home',[PageController::class, 'home']);
Route::get('/players',[PageController::class, 'players']);
Route::get('/sponsors',[PageController::class, 'sponsors']);
// Route::get('/pizza',[PageController::class, 'pizza']);
// Route::get('/flower',[PageController::class, 'flower']);
// Route::get('/streetfood',[PageController::class, 'streetfood']);


//others
// Route::get('/details', [DetailController::class, 'index']);



// Route::get('/cocktails',[CocktailController::class, 'index']);


// Route::get('/ingredients',[IngredientController::class, 'index']);
