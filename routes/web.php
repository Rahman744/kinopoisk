<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return redirect('/movies');
});

Route::get('/movies', [MovieController::class, 'index']);

