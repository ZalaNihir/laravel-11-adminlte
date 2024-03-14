<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::any('logout',function(){
    return 'Log Out';
})->name('logout');
require __DIR__.'/auth.php';
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function (){
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
});