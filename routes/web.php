<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Product\Create as ProductCreate;
use App\Http\Livewire\Product\Show as ProductShow;
use App\Http\Livewire\Product\Table as ProductTable;
use App\Http\Livewire\Product\Edit as ProductEdit;
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
    if(auth()->user() && auth()->user()->isAdmin())
        return redirect('/admin/dashboard');
    return view('site.home');
});

Route::get('/product/{slug}', ProductShow::class)->name('product.show');

Route::prefix('admin')->middleware(['auth:sanctum', 'verified','admin'])->group(function(){
    Route::get('/dashboard',function (){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/product/create', ProductCreate::class)->name('admin.product.create');
    Route::get('/product/edit/{id}', ProductEdit::class)->name('admin.product.edit');
    Route::get('/product/list', ProductTable::class)->name('admin.product.list');


});

