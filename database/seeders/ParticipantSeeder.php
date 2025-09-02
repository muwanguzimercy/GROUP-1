<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Participant;

class ParticipantSeeder extends Seeder
{
    public function run()
    {
        Participant::create([
            'full_name' => 'Apuol Maker',
            'email' => 'apuol@scit.ac.ug',
            'affiliation' => 'SCIT',
            'specialization' => 'Machine Learning',
            'cross_skill_trained' => true,
            'institution' => 'SCIT',
        ]);
    }
}

