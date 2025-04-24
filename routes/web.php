<?php

use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);

