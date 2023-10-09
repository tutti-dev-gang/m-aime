<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Photo,
};

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $photos = [
            "https://plus.unsplash.com/premium_photo-1675129626434-867201a9374d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2787&q=80",
            "https://plus.unsplash.com/premium_photo-1673038752584-0f1468d65137?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2786&q=80",
        ];
        Photo::create([
            'id' => 1,
            'photo_url' => $photos[0],
            'is_main' => 1,
            'user_id' => 1,
        ]);

        Photo::create([
            'id' => 2,
            'photo_url' => $photos[1],
            'is_main' => 0,
            'user_id' => 1,
        ]);

    }
}
