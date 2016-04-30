<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert(
            ['user_id' => 1, 'role_id' => 3 ],
            ['user_id' => 13, 'role_id' => 3 ],
            ['user_id' => 14, 'role_id' => 3 ],
            ['user_id' => 15, 'role_id' => 3 ],
            ['user_id' => 2, 'role_id' => 2 ]
        );

        for($x=3; $x<13;$x++ ){

            DB::table('user_roles')->insert(
                ['user_id' => $x, 'role_id' => 1 ]
            );
        }
    }
}
