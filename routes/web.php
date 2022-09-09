<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Chatapp;
use App\Http\Livewire\Authenticate;

Route::get('/login', Authenticate::class)->middleware('guest')->name('login');
Route::get('/', Chatapp::class)->middleware('auth')->name('app');


