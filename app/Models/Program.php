<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'name',
        'description',
        'national_alignment',
        'focus_areas',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
