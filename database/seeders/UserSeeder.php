<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
            $data = [
                    [
                        'name' => 'John',
                        'email' => 'admin@themesbrand.com',
                        'password' => 'password',
                        'email_verified_at' => Carbon::now(),
                        'dob' => Carbon::now(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'name' => 'user1',
                        'email' => 'user1@gmail.com',
                        'password' => 'password',
                        'email_verified_at' => Carbon::now(),
                        'dob' => Carbon::now(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'name' => 'user2',
                        'email' => 'user2@gmail.com',
                        'password' => 'password',
                        'email_verified_at' => Carbon::now(),
                        'dob' => Carbon::now(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'name' => 'user3',
                        'email' => 'user3@gmail.com',
                        'password' => 'password',
                        'email_verified_at' => Carbon::now(),
                        'dob' => Carbon::now(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                    [
                        'name' => 'user4',
                        'email' => 'user4@gmail.com',
                        'password' => 'password',
                        'email_verified_at' => Carbon::now(),
                        'dob' => Carbon::now(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
        ];
            DB::table('users')->insert($data);
    }
}
