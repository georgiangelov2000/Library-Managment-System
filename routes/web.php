<?php

use App\Http\Controllers\AssignUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GendreAuthorController;
use App\Http\Controllers\GendreBookController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\VisitorProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function () {
    Route::get('/index',[UserController::class,'index'])->name('user.index');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/store',[UserController::class,'store'])->name('user.store');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
});

Route::prefix('books')->group(function () {
    Route::get('/index',[BookController::class,'index'])->name('book.index');
    Route::get('/create',[BookController::class,'create'])->name('book.create');
    Route::post('/store',[BookController::class,'store'])->name('book.store');
    Route::get('/edit/{id}',[BookController::class,'edit'])->name('book.edit');
    Route::post('/update/{id}',[BookController::class,'update'])->name('book.update');
    Route::get('/delete/{id}',[BookController::class,'delete'])->name('book.delete');
});

Route::prefix('authors')->group(function () {
    Route::get('/index',[AuthorController::class,'index'])->name('author.index');
    Route::get('/create',[AuthorController::class,'create'])->name('author.create');
    Route::post('/store',[AuthorController::class,'store'])->name('author.store');
    Route::get('/edit/{id}',[AuthorController::class,'edit'])->name('author.edit');
    Route::post('/update/{id}',[AuthorController::class,'update'])->name('author.update');
    Route::get('/delete/{id}',[AuthorController::class,'delete'])->name('author.delete');
});

Route::prefix('gendrebooks')->group(function () {
    Route::get('/index',[GendreBookController::class,'index'])->name('gendre.book.index');
    Route::get('/create',[GendreBookController::class,'create'])->name('gendre.book.create');
    Route::post('/store',[GendreBookController::class,'store'])->name('gendre.book.store');
    Route::get('/edit/{id}',[GendreBookController::class,'edit'])->name('gendre.book.edit');
    Route::post('/update/{id}',[GendreBookController::class,'update'])->name('gendre.book.update');
    Route::get('/delete/{id}',[GendreBookController::class,'delete'])->name('gendre.book.delete');
});

Route::prefix('gendreauthors')->group(function () {
    Route::get('/index',[GendreAuthorController::class,'index'])->name('gendre.author.index');
    Route::get('/create',[GendreAuthorController::class,'create'])->name('gendre.author.create');
    Route::post('/store',[GendreAuthorController::class,'store'])->name('gendre.author.store');
    Route::get('/edit/{id}',[GendreAuthorController::class,'edit'])->name('gendre.author.edit');
    Route::post('/update/{id}',[GendreAuthorController::class,'update'])->name('gendre.author.update');
    Route::get('/delete/{id}',[GendreAuthorController::class,'delete'])->name('gendre.author.delete');
});

Route::prefix('roles')->group(function () {
    Route::get('/index',[RoleController::class,'index'])->name('role.index');
    Route::get('/create',[RoleController::class,'create'])->name('role.create');
    Route::post('/store',[RoleController::class,'store'])->name('role.store');
    Route::get('/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('/update/{id}',[RoleController::class,'update'])->name('role.update');
    Route::get('/delete/{id}',[RoleController::class,'delete'])->name('role.delete');
});

Route::prefix('genders')->group(function () {
    Route::get('/index',[GenderController::class,'index'])->name('gender.index');
    Route::get('/create',[GenderController::class,'create'])->name('gender.create');
    Route::post('/store',[GenderController::class,'store'])->name('gender.store');
    Route::get('/edit/{id}',[GenderController::class,'edit'])->name('gender.edit');
    Route::post('/update/{id}',[GenderController::class,'update'])->name('gender.update');
    Route::get('/delete/{id}',[GenderController::class,'delete'])->name('gender.delete');
});

Route::prefix('assignuser')->group(function () {
    Route::get('/index',[AssignUserController::class,'index'])->name('assign.user.index');
    Route::get('/create',[AssignUserController::class,'create'])->name('assign.user.create');
    Route::post('/store',[AssignUserController::class,'store'])->name('assign.user.store');
    Route::get('/edit/{id}',[AssignUserController::class,'edit'])->name('assign.user.edit');
    Route::post('/update/{id}',[AssignUserController::class,'update'])->name('assign.user.update');
    Route::get('/delete/{id}',[AssignUserController::class,'delete'])->name('assign.user.delete');
});

Route::prefix('profile')->group(function () {
    Route::get('/myprofile',[VisitorProfileController::class,'profile'])->name('profile.index');
    Route::get('/visitors/books',[VisitorProfileController::class,'visitorBooks'])->name('visitors.books');
    Route::get('/visitors/index',[VisitorProfileController::class,'index'])->name('visitors.index');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/index',[DashboardController::class,'index'])->name('dashboard.index');
});

Route::prefix('admins')->group(function () {
    Route::get('/admin/view/index',[UserController::class,'adminIndex'])->name('admin.view.index');
});


Route::prefix('visitors')->group(function () {
    Route::get('/visitor/index',[UserController::class,'visitorIndex'])->name('visitor.view.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

