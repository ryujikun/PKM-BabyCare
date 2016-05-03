<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create('id_ID');
        //dokter
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'dokter@gmail.com',
            'password' => bcrypt('secret'),
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'created_at' => $faker->dateTimeThisYear($max = '-4 months')
        ]);


        //kader posyandu
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'kader@gmail.com',
            'password' => bcrypt('secret'),
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'created_at' => $faker->dateTimeThisYear($max = '-4 months')
        ]);


        //ibu
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'ibu@gmail.com',
            'password' => bcrypt('secret'),
            'baby_id' => 1,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'created_at' => $faker->dateTimeThisYear($max = '-4 months')
        ]);

        for($x=1;$x<10;$x++){

            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'baby_id' => $x+1,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'created_at' => $faker->dateTimeThisYear($max = '-4 months')
            ]);
        }

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('secret'),
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'created_at' => $faker->dateTimeThisYear($max = '-4 months')
        ]);

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('secret'),
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'created_at' => $faker->dateTimeThisYear($max = '-4 months')
        ]);

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('secret'),
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'created_at' => $faker->dateTimeThisYear($max = '-4 months')
        ]);


    }
}

