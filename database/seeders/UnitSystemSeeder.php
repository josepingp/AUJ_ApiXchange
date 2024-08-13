<?php

namespace Database\Seeders;

use App\Models\UnitSystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnitSystem::create([
            'name' => 'International System of Units',
            'acronym' => 'SI'
        ]);
        UnitSystem::create([
            'name' => 'imperial system',
            'acronym' => null
        ]);
    }
}
