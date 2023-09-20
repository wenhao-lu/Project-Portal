<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Stack;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Skill::truncate();
        Education::truncate();
        Stack::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create()->each(function($project){
            $stacks = Stack::all()->random(rand(1,2) )->pluck('id');
            $project->stacks()->attach($stacks);
        });

        Skill::factory()->count(12)->create();
        Education::factory()->count(2)->create();
        Stack::factory()->count(4)->create();
    }
}
