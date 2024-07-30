<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        $typeNames = [
            "backend",
            "frontend",
            "fullstack",
        ];

        foreach ($typeNames as $typename) {
            $type = new Type();
            $type->name = $typename;
            $type->color = $faker->unique()->safeHexColor;
            $type->save();
        }
    }
}