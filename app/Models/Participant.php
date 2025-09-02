<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'affiliation',
        'specialization',
        'cross_skill_trained',
        'institution',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_participant')
                    ->withPivot('role_on_project', 'skill_role')
                    ->withTimestamps();
    }
}
