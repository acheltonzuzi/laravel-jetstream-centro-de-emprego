<?php

use App\Http\Livewire\Cadastrar;
use App\Http\Livewire\Detalhe;
use App\Http\Livewire\Principal;
use Illuminate\Support\Facades\Route;

Route::get("/", Principal::class)->name("home");
Route::get("cadastrar/", Cadastrar::class)->name("cadastrar");
Route::get("detalhe/{id}", Detalhe::class)->name("detalhe");
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
