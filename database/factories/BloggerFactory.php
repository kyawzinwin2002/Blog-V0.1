<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogger>
 */
class BloggerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $verify_code = rand(000000,999999);
        return [
            "name" => fake()->name(),
            "email" => fake()->unique()->email(),
            "password" => Hash::make("password"),
            "verify_code" => $verify_code,
            "user_token" => md5($verify_code),
        ];
    }
}
