<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 1000; $i++){

            $new_train = new Train();

            $new_train->company = $faker->company();
            $new_train->departing_from = $faker->city();
            $new_train->arriving_at = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numberBetween(1, 150);
            $new_train->number_of_cars = $faker->numberBetween(8, 25);
            $new_train->is_on_time = $faker->numberBetween(0, 1);
            $new_train->is_cancelled = $faker->numberBetween(0, 1);

            $new_train->save();
        }
    }
}
