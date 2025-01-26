<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageHomeController;
use Inertia\Inertia;

Route::get('/', [PageHomeController::class, 'anasayfa'])->name('anasayfa');


