<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('admin'),
            'admin_type_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Admin::factory(2)->create();
    }
}
