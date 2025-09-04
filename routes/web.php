<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionContoller;
use App\Http\Controllers\IssueController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/collections/1', [CollectionContoller::class, 'one'])->name('collections.one');
Route::get('/collections/2', [CollectionContoller::class, 'two'])->name('collections.two');
Route::get('/collections/3', [CollectionContoller::class, 'three'])->name('collections.three');
Route::get('/collections/4', [CollectionContoller::class, 'four'])->name('collections.four');
Route::get('/collections/5', [CollectionContoller::class, 'five'])->name('collections.five');


//issues.index
Route::get('/issues',[IssueController::class, 'index'])->name('issues.index');
//issues.create
Route::get('/issues/create',[IssueController::class, 'create'])->name('issues.create');
Route::post('/issues',[IssueController::class, 'store'])->name('issues.store');
//issues.edit
Route::get('/issues/{issue}/edit',[IssueController::class, 'edit'])->name('issues.edit');
Route::put('/issues/{issue}',[IssueController::class, 'update'])->name('issues.update');
//
Route::delete('/issues/{issue}',[IssueController::class, 'destroy'])->name('issues.destroy');
