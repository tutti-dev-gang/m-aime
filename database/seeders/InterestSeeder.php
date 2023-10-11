<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interest;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interests = [
            "Sports",
            "Musique",
            "Jeux vidéo",
            "Cuisine",
            "Lecture",
            "Voyage",
            "Cinéma",
            "Art",
            "Photographie",
            "Mode",
            "Technologie",
            "Animaux",
            "Nature",
            "Bricolage",
            "Jardinage",
        ];

        foreach ($interests as $interest) {
            Interest::create([
                'name' => $interest,
            ]);
        }
    }
}
