<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Job;
use App\Models\Tag;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured' => false,
            'location' => 'London, UK',
        ], [
            'featured' => true,
            'location' => 'Guadalajara, MEX',
        ]));
    }
}
