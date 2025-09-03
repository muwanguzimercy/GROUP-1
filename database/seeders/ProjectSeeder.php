<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
        {
            $projects = [
                [
                    'program_id' => 1,
                    'facility_id' => 1,
                    'title' => 'IoT Coffee Yield Tracker',
                    'nature_of_project' => 'Prototype',
                    'description' => 'Using sensors to monitor coffee growth and predict yield.',
                    'innovation_focus' => 'IoT devices, smart agriculture',
                    'prototype_stage' => 'MVP',
                    'testing_requirements' => 'Field testing with soil sensors',
                    'commercialization_plan' => 'Partner with NAADS for rollout',
                ],
                [
                    'program_id' => 2,
                    'facility_id' => 1,
                    'title' => 'Smart Health Monitoring',
                    'nature_of_project' => 'Research',
                    'description' => 'Wearable devices for real-time health data.',
                    'innovation_focus' => 'Wearables, healthcare',
                    'prototype_stage' => 'Concept',
                    'testing_requirements' => 'Lab testing',
                    'commercialization_plan' => 'Pilot in local clinics',
                ],
                [
                    'program_id' => 1,
                    'facility_id' => 2,
                    'title' => 'Renewable Energy Dashboard',
                    'nature_of_project' => 'Applied Work',
                    'description' => 'Dashboard for monitoring solar panel output.',
                    'innovation_focus' => 'Renewable energy, dashboards',
                    'prototype_stage' => 'Prototype',
                    'testing_requirements' => 'Performance checks',
                    'commercialization_plan' => 'Partner with energy companies',
                ],
                [
                    'program_id' => 2,
                    'facility_id' => 2,
                    'title' => 'Smart Home Automation',
                    'nature_of_project' => 'Prototype',
                    'description' => 'Automating home devices for energy efficiency.',
                    'innovation_focus' => 'Smart home, IoT',
                    'prototype_stage' => 'Market Launch',
                    'testing_requirements' => 'Compliance checks',
                    'commercialization_plan' => 'Launch with local builders',
                ],
                [
                    'program_id' => 1,
                    'facility_id' => 1,
                    'title' => 'AI Pest Detection',
                    'nature_of_project' => 'Research',
                    'description' => 'Using AI to identify crop pests from images.',
                    'innovation_focus' => 'AI, agriculture',
                    'prototype_stage' => 'Concept',
                    'testing_requirements' => 'Image dataset collection',
                    'commercialization_plan' => 'Collaborate with agricultural extension services',
                ],
                [
                    'program_id' => 2,
                    'facility_id' => 2,
                    'title' => 'Telemedicine Platform',
                    'nature_of_project' => 'Applied Work',
                    'description' => 'Platform for remote medical consultations.',
                    'innovation_focus' => 'Telemedicine, healthcare',
                    'prototype_stage' => 'MVP',
                    'testing_requirements' => 'User testing with clinics',
                    'commercialization_plan' => 'Partner with health providers for rollout',
                ],
            ];

            foreach ($projects as $data) {
                Project::create($data);
            }
        }
}

