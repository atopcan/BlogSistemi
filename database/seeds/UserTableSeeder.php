<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Ali Topcan",
            "email" => "alitopcan@outlook.com",
            "password" => bcrypt("123456")
        ]);

        DB::table("role_user")->insert(["role_id" =>1 ,"user_id" =>1]);
        DB::table("role_user")->insert(["role_id" =>2 ,"user_id" =>1]);
        DB::table("role_user")->insert(["role_id" =>3 ,"user_id" =>1]);
    }
}
