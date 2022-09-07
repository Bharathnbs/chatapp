<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateUser;
use App\Http\Livewire\Authenticate;



Route::name('user.')->group(function () {

    Route::middleware('guest')->name('login')->group(function(){
        Route::get('/', Authenticate::class);
});

    Route::middleware('Auth')->group(function(){

        Route::get('/create', CreateUser::class)->name('create');
        
    });



});
