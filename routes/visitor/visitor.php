<?php

use App\Http\Controllers\Visitor\Assigned\AssignCommentController;
use App\Http\Controllers\Visitor\Book\BookController;
use App\Http\Controllers\Visitor\Dashboard\DashboardController;
use App\Http\Controllers\Visitor\Profile\VisitorProfileController;
use Illuminate\Support\Facades\Route;

// comments
Route::prefix('comments')->group(function(){
    Route::get('/create/comment',[AssignCommentController::class,'create'])->name('comment.create');
    Route::post('/store/comment/',[AssignCommentController::class,'store'])->name('comment.store');
    Route::get('/book/{book}',[AssignCommentController::class,'show'])->name('comment.show');
    Route::get('/user',[AssignCommentController::class,'comments'])->name('comments');
    Route::get('/comment/edit/{assignComment}',[AssignCommentController::class,'edit'])->name('comment.edit');
    Route::post('/comment/update/{assignComment}',[AssignCommentController::class,'update'])->name('comment.update');
});

// dashboard
Route::prefix('visitors')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('visitor.view.dashboard');
});

// books
Route::prefix('books')->group(function () {
    Route::get('/',[BookController::class,'books'])->name('visitors.books');
    Route::get('/favourites',[BookController::class,'favouriteStatusPage'])->name('favourites.page');
    Route::get('/incomigs',[BookController::class,'incomingsStatusPage'])->name('incomings.page');
    Route::get('/readed',[BookController::class,'readedStatusPage'])->name('readed.page');
    Route::get('/archived',[BookController::class,'archivedStatusPage'])->name('archived.page');
});

// profile
Route::prefix('profile')->group(function () {
    Route::get('/myprofile',[VisitorProfileController::class,'profile'])->name('profile.index');
    Route::get('/edit/profile/{user}',[VisitorProfileController::class,'getEditProfile'])->name('edit.profile');
    Route::post('/update/profile/{id}',[VisitorProfileController::class,'postUpdateProfile'])->name('update.profile');
});