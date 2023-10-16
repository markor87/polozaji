<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PolozajiController;
use App\Http\Controllers\KonkursiController;
use App\Http\Controllers\KandidatiController;
use App\Livewire\SearchPolozaji;
use App\Livewire\SearchKonkursi;
use App\Livewire\SearchKandidati;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');


    Route::get('/polozaji', [PolozajiController::class, 'index'])->name('polozaji');

    Route::get('/search-polozaji', SearchPolozaji::class);

    Route::get('/konkursi', [KonkursiController::class, 'index'])->name('konkursi');

    Route::get('/search-konkursi', SearchKonkursi::class);

    Route::get('/kandidati', [KandidatiController::class, 'index'])->name('kandidati');

    Route::get('/search-kandidati', SearchKandidati::class);

});
