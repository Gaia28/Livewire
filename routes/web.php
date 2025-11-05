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

Route::get('fornecedores', [CreateFornecedores::class, 'render'])->name('create.fornecedores')->middleware('auth');
require __DIR__.'/auth.php';
