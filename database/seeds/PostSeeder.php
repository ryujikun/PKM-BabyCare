<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x=1;$x<11;$x++){
            DB::table('posts')->insert([
                'user_id' => $faker->numberBetween($min=3, $max=13),
                'body' => $faker->paragraphs($nb=3, $asText = true ),
                'created_at' => $faker->dateTimeThisYear($max = 'now')
            ]);
        }
    }
}
