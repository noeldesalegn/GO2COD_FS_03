<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Chat\CreateChat as ChatCreateChat;
use App\Livewire\Chat\Main as Main;

Route::view('/', 'welcome');

//livewire routes

Route::get('/users',ChatCreateChat::class)->name('users');

Route::get('/chat{key?}',Main::class)->middleware('auth')->name('chat');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
