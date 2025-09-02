<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        Facility::create([
            'name' => 'Lwera Innovation Lab',
            'location' => 'Lwera, Uganda',
            'description' => 'Government-backed lab for prototyping and testing.',
            'partner_organization' => 'UIRI',
            'facility_type' => 'Testing Center',
            'capabilities' => 'CNC, PCB fabrication, materials testing',
        ]);
    }
}

