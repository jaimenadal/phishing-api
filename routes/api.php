<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScanController;

Route::post('/v1/scan', [ScanController::class, 'scan']);
