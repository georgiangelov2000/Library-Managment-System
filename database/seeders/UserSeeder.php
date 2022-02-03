<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(array(
            0 =>
            array(
                'id' => '1',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 1,
                'flag_id' => 1,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            1 =>
            array(
                'id' => '2',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 2,
                'flag_id' => 3,
                'role_id' => 2,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            2 =>
            array(
                'id' => '3',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 2,
                'flag_id' => 2,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            3 =>
            array(
                'id' => '4',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 1,
                'flag_id' => 3,
                'role_id' => 2,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            4 =>
            array(
                'id' => '5',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 2,
                'flag_id' => 2,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            5 =>
            array(
                'id' => '6',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 2,
                'flag_id' => 2,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            6 =>
            array(
                'id' => '7',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 2,
                'flag_id' => 2,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            7 =>
            array(
                'id' => '8',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 2,
                'flag_id' => 2,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            8 =>
            array(
                'id' => '9',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 1,
                'flag_id' => 2,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            9 =>
            array(
                'id' => '10',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 2,
                'flag_id' => 2,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            10 =>
            array(
                'id' => '11',
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'dob' => date('Y-m-d H:i:s'),
                'gender_id' => 1,
                'flag_id' => 2,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        ));
    }
}
