<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert(array(
            0 =>
            array(
                'id' => '1',
                'name' => Str::random(10),
                'genre_id' => 1,
                'gender_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            1 =>
            array(
                'id' => '2',
                'name' => Str::random(10),
                'genre_id' => 2,
                'gender_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => '3',
                'name' => Str::random(10),
                'genre_id' => 3,
                'gender_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => '4',
                'name' => Str::random(10),
                'genre_id' => 4,
                'gender_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => '5',
                'name' => Str::random(10),
                'genre_id' => 5,
                'gender_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => '6',
                'name' => Str::random(10),
                'genre_id' => 6,
                'gender_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => '7',
                'name' => Str::random(10),
                'genre_id' => 7,
                'gender_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        ));
    }
}
