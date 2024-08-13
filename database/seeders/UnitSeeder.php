<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\UnitSystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'name' => 'metre',
            'symbol' => 'm',
            'conversion_factor_to_base' => 1,
            'conversion_factor_from_base' => 1,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => true
        ]);

        Unit::create([
            'name' => 'kilómetro',
            'symbol' => 'km',
            'conversion_factor_to_base' => 1000,
            'conversion_factor_from_base' => 0.001,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'centímetro',
            'symbol' => 'cm',
            'conversion_factor_to_base' => 0.01,
            'conversion_factor_from_base' => 100,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'milímetro',
            'symbol' => 'mm',
            'conversion_factor_to_base' => 0.001,
            'conversion_factor_from_base' => 1000,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'decímetro',
            'symbol' => 'dm',
            'conversion_factor_to_base' => 0.1,
            'conversion_factor_from_base' => 10,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'micrómetro',
            'symbol' => 'µm',
            'conversion_factor_to_base' => 0.000001,
            'conversion_factor_from_base' => 1000000,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'nanómetro',
            'symbol' => 'nm',
            'conversion_factor_to_base' => 0.000000001,
            'conversion_factor_from_base' => 1000000000,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'picómetro',
            'symbol' => 'pm',
            'conversion_factor_to_base' => 0.000000000001,
            'conversion_factor_from_base' => 1000000000000,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'decámetro',
            'symbol' => 'dam',
            'conversion_factor_to_base' => 10,
            'conversion_factor_from_base' => 0.1,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'hectómetro',
            'symbol' => 'hm',
            'conversion_factor_to_base' => 100,
            'conversion_factor_from_base' => 0.01,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'megámetro',
            'symbol' => 'Mm',
            'conversion_factor_to_base' => 1000000,
            'conversion_factor_from_base' => 0.000001,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'gigámetro',
            'symbol' => 'Gm',
            'conversion_factor_to_base' => 1000000000,
            'conversion_factor_from_base' => 0.000000001,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);

        Unit::create([
            'name' => 'terámetro',
            'symbol' => 'Tm',
            'conversion_factor_to_base' => 1000000000000,
            'conversion_factor_from_base' => 0.000000000001,
            'unit_system_id' => 1,
            'unit_type_id' => 1,
            'is_base_unit' => false
        ]);
    }
}
