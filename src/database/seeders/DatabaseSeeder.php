<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Person::factory(10)->create();
        Product::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
