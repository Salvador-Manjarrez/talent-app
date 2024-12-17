<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Relations\HasMany;
use Illuminate\Database\Relations\BelongsTo;
use Illuminate\Database\Relations\BelongsToMany;
use App\Models\Employer;
use App\Models\Tag;

class Job extends Model
{
    use HasFactory;

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->attach($tag);
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

       /**
     * Typecast for protection.
     *
     * @var array
     */
    protected $casts = [
        't_type' => 'array',  // Allowing tables in JSON Arrays be transformed to strings
        'c_type' => 'array',  
    ];

}
