<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {

        $projects = Project::all();


        foreach ($projects as $project) {
            $project->type_id = rand(1, 3);
            $project->save();
        }


    }
}