<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BabyMomentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ( $x = 1; $x < 30; $x++){
            DB::table('babymoments')->insert([
                'baby_id' => $faker->numberBetween($min = 1, $max = 9),
                'description' => $faker->sentences($nbWords = 12, $variableNbWords = true),
                'created_at' => $faker->dateTimeThisYear($max = '-4 months')

            ]);
        }
    }

}
