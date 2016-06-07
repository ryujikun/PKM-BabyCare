<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UserSeeder::class);
        $this->call(BabySeeder::class);
        $this->call(BabyMomentSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(AnswerSeeder::class);
//        $this->call(TimelineSeeder::class);
        $this->call(RoleSeeder::class);

        Model::reguard();
    }

}


