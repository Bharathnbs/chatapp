<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateUser;



Route::name('user.')->group(function () {

    Route::get('/create', CreateUser::class)->name('create');

});
