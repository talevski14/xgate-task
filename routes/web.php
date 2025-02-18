<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', [ViewController::class, 'index'])->name('home');
Route::get('/categories/create', [ViewController::class, 'create_category'])->name('category.create');
Route::get('/projects/create', [ViewController::class, 'create_project'])->name('project.create');
Route::get('/tasks/create', [ViewController::class, 'create_task'])->name('task.create');
