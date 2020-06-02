<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Truck;

class TrucksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Truck');
        for ($i = 0; $i < 50; $i++) {
            Truck::create([
                'brand_id' => $faker->numberBetween(1,4),
                'years' => $faker->numberBetween(1900,now()->year),
                'owner' => $faker->name(),
                'numb_of_owners' => $faker->numberBetween(1,10),
                'comment' => $faker->sentence(),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
          }
    }
}
