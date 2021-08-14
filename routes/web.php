<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
use App\Http\Livewire\Product\Create as ProductCreate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('site.home');
});

/*Route::prefix('admin')->middleware(['admin'])->group(function() {
    Route::get('/product/create', ProductCreate::class);
});*/

Route::prefix('admin')->middleware(['auth:sanctum', 'verified','admin'])->group(function(){
    Route::get('/dashboard',function (){
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

