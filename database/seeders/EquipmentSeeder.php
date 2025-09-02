<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipment;

class EquipmentSeeder extends Seeder
{
    public function run()
    {
        Equipment::create([
            'facility_id' => 1,
            'name' => 'CNC Milling Machine',
            'capabilities' => 'Precision cutting, prototyping',
            'description' => 'Used for mechanical part fabrication.',
            'inventory_code' => 'EQ-CNC-001',
            'usage_domain' => 'Mechanical',
            'support_phase' => 'Prototyping',
        ]);
    }
}


