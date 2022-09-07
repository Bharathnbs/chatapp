<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateUser;
use App\Http\Livewire\Authenticate;
use App\Http\Livewire\ChatBox;
use App\Http\Livewire\ChatUser;



Route::name('user.')->group(function () {

    Route::middleware('guest')->name('login')->group(function(){
        Route::get('/', Authenticate::class);
});

    Route::middleware('auth')->group(function(){

        Route::get('/create', CreateUser::class)->name('create');
        Route::get('/chatuser/create', ChatUser::class)->name('chatuser-create');
        Route::get('/user/{id}/chatbox', ChatBox::class)->name('chat');
    });



});
