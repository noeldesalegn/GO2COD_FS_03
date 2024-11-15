<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Chat\CreateChat as ChatCreateChat;
use App\Livewire\Chat\Main as ChatMain;

Route::view('/', 'welcome');

//livewire routes

Route::get('/users',ChatCreateChat::class)->name('chat.create');

Route::get('/chat',ChatMain::class)->name('chat.main');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
