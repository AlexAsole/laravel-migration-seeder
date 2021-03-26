<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Actor;

class ActorsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $actor = new Actor();
            $actor->name = $faker->name();
            $actor->surname = $faker->name();
            $actor->nationality = 'Generic Nation';
            $actor->age = rand(0, 100);
            $actor->save();
        }
    }
}
