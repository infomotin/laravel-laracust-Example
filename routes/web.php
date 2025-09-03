<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionContoller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/collections/1', [CollectionContoller::class, 'one'])->name('collections.one');
Route::get('/collections/2', [CollectionContoller::class, 'two'])->name('collections.one');
Route::get('/collections/3', [CollectionContoller::class, 'three'])->name('collections.one');
Route::get('/collections/4', [CollectionContoller::class, 'four'])->name('collections.one');
Route::get('/collections/5', [CollectionContoller::class, 'five'])->name('collections.one');
