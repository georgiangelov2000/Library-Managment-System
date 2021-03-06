<?php

use App\Http\Controllers\Admin\Author\AuthorController;
use App\Http\Controllers\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//book flag
Route::post('/update/book/status/{book}',[StatusController::class,'updateStatusBook'])->name('book.update.status');

//user flag
Route::post('/update/user/status/{user}',[StatusController::class,'updateStatusUser'])->name('user.update.status');
