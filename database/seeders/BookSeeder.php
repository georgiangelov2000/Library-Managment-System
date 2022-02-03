<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(array(
             0 =>
             array(
                 'id' => '1',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 1995,
                 'book_no' => rand(0, 100),
                //   'image',
                 'author_id' => 1,
                //  'flag_id',
                 'genre_id' => 1,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
              1 =>
              array(
                  'id' => '2',
                  'name' => Str::random(10),
                  'content' => Str::random(50),
                  'year' => 1996,
                  'book_no' => rand(0, 100),
                //    'image',
                  'author_id' => 2,
                //   'flag_id',
                  'genre_id' => 2,
                  'created_at' => date('Y-m-d H:i:s'),
                  'updated_at' => date('Y-m-d H:i:s'),
              ),
              2 =>
              array(
                  'id' => '3',
                  'name' => Str::random(10),
                  'content' => Str::random(50),
                  'year' => 1997,
                  'book_no' => rand(0, 100),
                //    'image',
                  'author_id' => 3,
                //   'flag_id',
                  'genre_id' => 3,
                  'created_at' => date('Y-m-d H:i:s'),
                  'updated_at' => date('Y-m-d H:i:s'),
              ),
             3 =>
             array(
                 'id' => '4',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 1998,
                 'book_no' => rand(0, 100),
                //  'image',
                 'author_id' => 4,
                //  'flag_id',
                 'genre_id' => 4,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
             4 =>
             array(
                 'id' => '5',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 1999,
                 'book_no' => rand(0, 100),
                //  'image',
                 'author_id' => 5,
                //  'flag_id',
                 'genre_id' => 5,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
             5 =>
             array(
                 'id' => '6',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 2000,
                 'book_no' => rand(0, 100),
                //  'image',
                 'author_id' => 6,
                //  'flag_id',
                 'genre_id' => 6,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
             6 =>
             array(
                 'id' => '7',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 2000,
                 'book_no' => rand(0, 100),
                //  'image',
                 'author_id' => 7,
                //  'flag_id',
                 'genre_id' => 7,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
             7 =>
             array(
                 'id' => '8',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 1992,
                 'book_no' => rand(0, 100),
                //  'image',
                 'author_id' => 1,
                //  'flag_id',
                 'genre_id' => 3,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
             8 =>
             array(
                 'id' => '9',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 1990,
                 'book_no' => rand(0, 100),
                //  'image',
                 'author_id' => 3,
                //  'flag_id',
                 'genre_id' => 2,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
             9 =>
             array(
                 'id' => '10',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 1888,
                 'book_no' => rand(0, 100),
                //  'image',
                 'author_id' => 4,
                //  'flag_id',
                 'genre_id' => 5,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
             10 =>
             array(
                 'id' => '11',
                 'name' => Str::random(10),
                 'content' => Str::random(50),
                 'year' => 1895,
                 'book_no' => rand(0, 100),
                //  'image',
                 'author_id' => 2,
                //  'flag_id',
                 'genre_id' => 3,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ),
        ));
    }
}
