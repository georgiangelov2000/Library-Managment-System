const mix = require('laravel-mix');
const MixGlob = require('laravel-mix-glob');
const mixGlob = require('laravel-mix-glob');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


// const mixGlob= new MixGlob({
//     'mix':mix,
//     'mapping':{
//         'ext':{
//             'byFunc':{
//                 'js':'js',
//                 'css':'css',
//                 'copy':'js'
//             }
//         }
//     }
// })

// mixGlob.js('resources/js/**/*.js','public/js',null,{
//     base:'resources/js/'
// })

 mix.sass('resources/sass/app.scss', 'public/css')
 .js('resources/js/app.js', 'public/js')
 .js('resources/js/rows.js', 'public/js')
 .js('resources/js/authors/authors.js', 'public/js')
 .js('resources/js/books/books.js', 'public/js')
 .js('resources/js/genders/genders.js', 'public/js')
 .js('resources/js/genres/genres.js', 'public/js')
 .js('resources/js/roles/roles.js', 'public/js')
 .js('resources/js/users/users.js', 'public/js')
 .js('resources/js/assigned_books/assigned_books.js', 'public/js')
 .js('resources/js/assigned_users/assigned_users.js', 'public/js')
 .js('resources/js/assigned-authors/assigned-authors.js', 'public/js')
 .js('resources/js/user-roles/user-roles.js', 'public/js')
 .js('resources/js/mybooks/mybooks.js', 'public/js')
 .js('resources/js/messages.js', 'public/js')
 .js('resources/js/mybooks/archived.js', 'public/js')
 .js('resources/js/mybooks/favourite.js', 'public/js')
 .js('resources/js/mybooks/incomings.js', 'public/js')
 .js('resources/js/mybooks/readed.js', 'public/js')
 .js('resources/js/comments/comments.js', 'public/js')
 .js('resources/js/comments/userComments.js', 'public/js')
 .sourceMaps();


