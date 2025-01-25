<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\SiteSetting;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Middleware\SiteSettingMiddleware;

Route::get('/', [PageHomeController::class, 'anasayfa'])->name("anasayfa");
Route::get('/urunler', [PageController::class, 'urunler'])->name("urunler");
Route::get('/erkek-giyim', [PageController::class, 'urunler'])->name("erkekurunler");
Route::get('/kadin-giyim', [PageController::class, 'urunler'])->name("kadinurunler");
Route::get('/cocuk-giyim', [PageController::class, 'urunler'])->name("cocukurunler");
Route::get('/urun/detay', [PageController::class, 'urundetay'])->name("urundetay");
Route::get('/hakkımızda', [PageController::class, 'hakkımızda'])->name("hakkımızda");
Route::get('/iletisim', [PageController::class, 'iletisim'])->name("iletisim");
Route::get('/sepet', [PageController::class, 'sepet'])->name("sepet");
