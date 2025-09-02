<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        Program::create([
            'name' => 'Smart Agriculture Initiative',
            'description' => 'Enhancing crop yield prediction using IoT and AI.',
            'national_alignment' => 'NDPIII - Agro-industrialization',
            'focus_areas' => 'IoT, Machine Learning, Sustainability',
            'phases' => 'Cross-Skilling, Collaboration, Prototyping, Commercialization',
        ]);
    }
}

