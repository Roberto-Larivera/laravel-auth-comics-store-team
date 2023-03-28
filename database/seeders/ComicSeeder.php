<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

// Helpers
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++){
            $name = $faker->unique()->word();

            Comic::create([
                'name' => $name,
                'description' => $faker->unique()->paragraph(),
                'price' =>strval($faker->randomFloat(2,0,100)) ,
            ]);

        }

    }
}
