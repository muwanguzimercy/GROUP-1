<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Outcome;

class OutcomeSeeder extends Seeder
{
    public function run()
    {
        Outcome::create([
            'project_id' => 1,
            'title' => 'Coffee Yield Dashboard',
            'description' => 'Interactive dashboard showing sensor data and predictions.',
            'artifact_link' => 'https://github.com/example/coffee-dashboard',
            'outcome_type' => 'Prototype',
            'quality_certification' => 'UIRI Certified',
            'commercialization_status' => 'Demoed',
        ]);
    }
}

