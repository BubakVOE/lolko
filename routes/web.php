<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\TesterController;
use App\Http\Controllers\ChampionController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SummonerController;
use App\Models\Champion;

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


// home
Route::get('/', [LeagueController::class, 'index']) ->name('nav-home');

// summoner
Route::get('/summoners', [SummonerController::class, 'index'])->name('summoner-index');
Route::get('/summoner/{username}', [SummonerController::class, 'show'])->name('summoner.show');
Route::get('/summoner/{username}/match/{matchId}', [SummonerController::class, 'match']);

// Champions
Route::get('/champions', [ChampionController::class, 'index'])->name('champion-index');
Route::get('/champion/{champion}', [ChampionController::class, 'show'])->name('champions-show');

// items
route::get('/items', [ItemsController::class, 'index'])->name('items-index');

// novinky
route::get('/novinky', [NewsController::class, 'index'])->name('news-index');
route::get('/novinky/lolko', [NewsController::class, 'lolko'])->name('news-lolko');
route::get('/novinky/web', [NewsController::class, 'web'])->name('news-web');

// route::get('/tester', [TesterController::class, 'index']);
// route::get('/findMyRef', [TesterController::class, 'route']);
