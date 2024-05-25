<?php

use App\Livewire\FormRegister;
use App\Livewire\KuotaCabang;
use App\Livewire\Testing;
use Illuminate\Support\Facades\Route;

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


// Route::get('/', KuotaCabang::class)->name('kuota-cabang');
Route::get('/', Testing::class);
Route::get('/form-register', FormRegister::class);
