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
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'dob' => Str::random(10).'@gmail.com',
            'gender_id' => Str::random(10).'@gmail.com',
            'flag_id' => Str::random(10).'@gmail.com',
            'role_id' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
}
