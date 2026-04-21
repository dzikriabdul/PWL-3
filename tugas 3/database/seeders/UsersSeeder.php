<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 $faker = Faker::create();

        DB::table('users')->insert([
            'npm' => $faker->unique()->numberBetween(10000000, 99999999),
            'username' => $faker->userName,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->email,
            'password' => Hash::make('987654321')
        ]);
    }
}