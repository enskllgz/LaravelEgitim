<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;
use Inertia\Inertia;

Route::get('/', [PageHomeController::class, 'anasayfa'])->name('anasayfa');
Route::get('/hakkımızda', [PageController::class, 'hakkımızda'])->name('hakkımızda');
Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');
Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');
Route::get('/urun/detay', [PageController::class, 'urundetay'])->name('urundetay');
Route::get('sepet', [PageController::class, 'sepet'])->name('sepet');





