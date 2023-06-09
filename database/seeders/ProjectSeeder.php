<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config('projects');
        foreach ($projects as $project) {
            $newPost = new Project();
            $newPost->title = $project['title'];
            $newPost->slug = Str::slug($project['title'], '-');
            $newPost->image = $project['image'];
            $newPost->description = $project['description'];
            $newPost->save();
        }
    }
}
