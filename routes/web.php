<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'dashboard');

/**
 * App Landlord
 */
Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'landlord.dashboard')->layout('layouts.tenant-dashboard');
    Route::livewire('/dashboard/tenant/{tenant}', 'landlord.tenant-item')->layout('layouts.landlord-dashboard');
});

/**
 * Authentication
 */
Route::middleware('guest')->group(function () {
    Route::livewire('/login', 'auth.login')->layout('layouts.auth')->name('login');
});
