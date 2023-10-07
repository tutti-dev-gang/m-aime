<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'Alexis',
            'email' => 'alexyanguas71@gmail.com',
            'password' => bcrypt('rootroot'),
            'profile_description' => 'I am a software developer',
            'location' => 'Madrid',
            'birthday' => '1996-07-01',
            'last_login' => '2021-07-01',
            'interests_and_preferences' => '["music", "sports", "movies"]',
            'gender_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::factory(20)->create();
    }
}
