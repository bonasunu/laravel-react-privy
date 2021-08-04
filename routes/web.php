<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivyController;

Route::get('/', [PrivyController::class, 'show']);
