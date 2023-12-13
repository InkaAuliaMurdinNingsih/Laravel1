<?php

namespace Database\Seeders;
use App\Models\aulia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class auliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        aulia::factory()->count(5)->create();
    }
}
