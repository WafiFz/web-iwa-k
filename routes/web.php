<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;

Route::get('/admin', [Analytics::class, 'index'])->name('dashboard-analytics');















require 'template.php';