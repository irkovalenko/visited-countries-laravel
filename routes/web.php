<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
