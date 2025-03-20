<?php

namespace Database\Seeders;

use App\Models\Vol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vol::factory()->count(10)->create();
    }
}
