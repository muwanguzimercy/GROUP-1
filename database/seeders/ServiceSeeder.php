<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'facility_id' => 1,
            'name' => 'PCB Fabrication',
            'description' => 'Design and manufacture of printed circuit boards.',
            'category' => 'Machining',
            'skill_type' => 'Hardware',
        ]);
    }
}


