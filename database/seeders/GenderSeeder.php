<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create([
            'id' => 1,
            'name' => 'Homme',
            'icon' => 'fa-solid fa-mars',
        ]);

        Gender::create([
            'id' => 2,
            'name' => 'Femme',
            'icon' => 'fa-solid fa-venus',
        ]);

          Gender::create([
            'id' => 3,
            'name' => 'Autre',
            'icon' => 'fa-solid fa-venus-mars'
        ]);
    }
}
