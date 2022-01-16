<?php

namespace App\Providers;

use App\Models\AssignBook;
use App\Models\Author;
use App\Models\Book;
use App\Models\Gender;
use App\Models\GendreAuthor;
use App\Models\GendreBook;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.navigations.sidebar', function ($view) {

            $usersCount = User::all();
            $usersRolesCount = Role::all();
            $authorsCount = Author::all();
            $booksCount = Book::all();
            $rolesCount = Role::all();
            $gendersCount = Gender::all();
            $genresBooks = GendreBook::all();
            $genresAuthors = GendreAuthor::all();
            $assigned_booksCount = AssignBook::all();

            $view->with([
                'usersCount' => $usersCount,
                'usersRolesCount' => $usersRolesCount,
                'rolesCount' => $rolesCount,
                'booksCount' => $booksCount,
                'authorsCount' => $authorsCount,
                'gendersCount' => $gendersCount,
                'genresBooks' => $genresBooks,
                'genresAuthors' => $genresAuthors,
                'genresAuthors' => $genresAuthors,
                'assigned_booksCount' => $assigned_booksCount,
            ]);
        });

        

    }
}
