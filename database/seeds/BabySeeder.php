<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BabySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $element = ['Sehat', 'Kurang sehat', 'Masa penyembuhan'];
        DB::table('babies')->insert([
            'name' => $faker->name,
            'mother_id' => 3,
            'birth_date' => $faker->dateTimeBetween($startDate='-1 years', $endDate='-4 months' ),
            'height' =>  $faker->numberBetween($max=50, $min = 90) ,
            'weight' =>  $faker->randomFloat($max=5 , $min = 2.5) ,
            'condition' => $faker->randomElement($element),
            'created_at' => $faker->dateTimeThisMonth($max = 'now')
        ]);

        for($x=4;$x<=12;$x++){
            DB::table('babies')->insert([
                'name' => $faker->name,
                'mother_id' => $x,
                'birth_date' => $faker->dateTimeBetween($startDate='-1 years', $endDate='-4 months' ),
                'height' =>  $faker->numberBetween($max=50, $min = 90) ,
                'weight' =>  $faker->randomFloat($max=5 , $min = 2.5) ,
                'condition' => $faker->randomElement($element),
                'created_at' => $faker->dateTimeThisMonth($max = 'now')
            ]);

        }
    }
}
