<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->words(3, true);
            $train->departure_station = $faker->words(3, true);
            $train->arrival_station = $faker->words(3, true);
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->bothify('??-########');
            $train->carriages_number = $faker->numberBetween(1, 9);
            $train->on_time = $faker->randomElement(1, 0);
            $train->deleted = $faker->randomElement(1, 0);
            $train->save();
        }
    }
}
