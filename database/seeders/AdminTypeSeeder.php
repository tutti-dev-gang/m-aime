<?php

namespace Database\Seeders;

use App\Models\AdminType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        AdminType::create([
            'id' => 1,
            'name' => 'Admin',
            'icon' => 'fa-regular fa-star-half',
            'color' => '#000000',
            'description' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        AdminType::create([
            'id' => 2,
            'name' => 'Super Admin',
            'icon' => 'fa-regular fa-star',
            'color' => '#ff0000',
            'description' => 'Super Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
