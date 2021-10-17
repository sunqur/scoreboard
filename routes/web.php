<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ScoresController;
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

Route::get('/games', [GamesController::class, 'Get_games']);

Route::get('/scoreboard', [ScoresController::class, 'Get_scoreboard']);

Route::post('/score/add', [ScoresController::class, 'Add_score']);
