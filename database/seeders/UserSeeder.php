<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $verify_code = rand(000000,999999);

        User::factory()->create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("password"),
            "verify_code" => $verify_code,
            "user_token" => md5($verify_code),
            "role_id" => 3,
        ]);

        $verify_code2 = rand(000000,999999);


        User::factory()->create([
            "name" => "Kyaw Zin Win",
            "email" => "kyaw@gmail.com",
            "password" => Hash::make("password"),
            "verify_code" => $verify_code2,
            "user_token" => md5($verify_code2),
            "role_id" => 2,
        ]);

        $verify_code3 = rand(000000,999999);


        User::factory()->create([
            "name" => "Poe",
            "email" => "poe@gmail.com",
            "password" => Hash::make("password"),
            "verify_code" => $verify_code3,
            "user_token" => md5($verify_code3),
            "role_id" => 1,
        ]);

        User::factory(10)->create();
    }
}
