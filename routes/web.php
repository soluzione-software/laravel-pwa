<?php

use Illuminate\Support\Facades\Route;
use SoluzioneSoftware\LaravelPWA\Http\Controllers\OfflineController;

Route::get('/pwa/offline', OfflineController::class)->name('pwa.offline');
