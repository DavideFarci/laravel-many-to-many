<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $languages = Language::all()->pluck('id');
        foreach (config('projects') as $objProject) {

            $project = Project::create($objProject);

            $project->languages()->sync([1, 2, 3]);
        }
    }
}
