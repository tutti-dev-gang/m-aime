<?php

namespace Database\Factories;

use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genderIds = Gender::pluck('id')->toArray();

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'profile_description' => fake()->text(),
            'location' => fake()->city(),
            'birthday' => fake()->date(),
            'last_login' => fake()->date(),
            'interests' => '[{ "id": 1, "name": "Sports" },{ "id": 2, "name": "Musique"},{ "id": 3, "name": "Jeux vidéo" }]',
            'gender_id' => fake()->randomElement($genderIds),
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
