<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Volt::route('/', 'pages.auth.login')
        ->name('login');
});

Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::get('client', [ClientController::class, 'create'] )
        ->name('clients.create');

    Route::get('clients{client:uuid}', [ClientController::class, 'edit'] )
        ->name('client.edit');
});






