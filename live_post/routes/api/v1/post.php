<?php 
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware('auth')
->prefix('something')
->group(function () {
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/{user}', [PostController::class, 'show']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::patch('/posts/{post}', [PostController::class, 'update']); 
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);
});





?>  