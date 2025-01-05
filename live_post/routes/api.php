<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator;
// use \App\Models\User;

// Route::apiResource('posts',PostController::class);
// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/{post}', [PostController::class, 'show']);
// Route::post('/post', [PostController::class, 'store']);
// Route::patch('/posts/{post}', [PostController::class, 'update']);  // Corrected to {post}
// Route::delete('/posts/{post}', [PostController::class, 'destroy']);  // Corrected to {post}


Route::prefix('v1')
    ->group(function () {
 
   RouteHelpers::includeRouteFiles('api/v1');


    });

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 



 


 