<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x=1;$x<30;$x++){
        DB::table('timelines')->insert([
            'user_id' => $faker->numberBetween($min=3, $max=13),
            'question' => $faker->sentences($nb=3, $asText = true) . '? ',
            'answer' => $faker->sentences($nb=3, $asText = true),
            'created_at' => $faker->dateTimeThisYear($max = '-4 months')

        ]);
    }
    }
}
