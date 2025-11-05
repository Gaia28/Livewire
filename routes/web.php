<?php

use App\Livewire\Fornecedores\CreateFornecedores;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('fornecedores', CreateFornecedores::class)->name('create.fornecedores')->middleware('auth');
Route::post('create.fornecedor', CreateFornecedores::class)->name('create.fornecedor')->middleware('auth');
require __DIR__.'/auth.php';
