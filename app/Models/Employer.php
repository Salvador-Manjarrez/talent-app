<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Relations\HasMany;
use Illuminate\Database\Relations\BelongsTo;
use App\Models\User;
use App\Models\Job;

class Employer extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
