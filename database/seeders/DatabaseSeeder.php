<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call([
            AdminTypeSeeder::class,
            AdminSeeder::class,
            GenderSeeder::class,
            InterestSeeder::class,
            UserSeeder::class,
            PhotosSeeder::class,
        ]);
    }
}
