<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(30)->create();

        User::factory()->create([
            "email" => "antoniocarlosjr850@gmail.com",
            "password" => "1234567",
        ]);
    }
}
