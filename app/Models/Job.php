<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_applications';

    protected $fillable = [
        'company',
        'role',
        'location',
        'status',
        'job_url',
        'notes',
        'applied_at',
        'follow_up_at',
    ];
}
