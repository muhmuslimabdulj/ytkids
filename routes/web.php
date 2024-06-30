<?php

use App\Livewire\Home\Index;
use App\Livewire\Watch\Index as WatchIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('home'));
Route::get('/videos', Index::class)->name('home');
Route::get("/watch/{code}", WatchIndex::class)->name('watch');


Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
