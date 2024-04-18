<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newProject = new Project();

        $newProject->name = "Prova di Seeder";
        $newProject->develop_with = "Laravel, HTML; CSS, ETC.";
        $newProject->description = "Descrizione di qualche tipo e bla bla bla";
        $newProject->link_github = "https://www.nike.com/it/?cp=10371701324_search_&Macro=-nike%20website%20official-g-10574438292-105359252340-e-c-IT-extended-452263310153-kwd-14546471874-1008588&ds_rl=1252249&gad_source=1&gclid=Cj0KCQjwiYOxBhC5ARIsAIvdH51m-QkmN52ZJX6KP7GEGfL7Cj1KDY5O4XVlPwKhGsCmVfcn9F08gy4aAsO3EALw_wcB&gclsrc=aw.ds";
        $newProject->image = "https://pbs.twimg.com/profile_images/1169515344232419328/deUK52kE_400x400.jpg";

        $newProject->save();

    }
}
