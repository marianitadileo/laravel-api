<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $newProj = new Project();
            $newProj->title = $faker->sentence(4);
            $newProj->description = $faker->text(500);
            $newProj->slug = Str::slug($newProj->title, '-');
            $newProj->save();
        }
    }
}
