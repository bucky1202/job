<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tags = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured' => true,
            'schedule' =>'Full Time',
        ],[
            'featured' => false,
            'schedule' =>'Part Time',

        ]
        ));
    }
}
