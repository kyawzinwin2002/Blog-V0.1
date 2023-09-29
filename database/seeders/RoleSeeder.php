<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            "name" => "user",
            "value" => 1
        ]);

        Role::factory()->create([
            "name" => "administrator",
            "value" => 2
        ]);

        Role::factory()->create([
            "name" => "admin",
            "value" => 3
        ]);
    }
}
