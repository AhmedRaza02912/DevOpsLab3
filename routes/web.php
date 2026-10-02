<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);

Route::get('/', function () {
    return redirect()->route('posts.index');
});
