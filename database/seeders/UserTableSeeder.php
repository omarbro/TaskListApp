<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $userIn=[
       		['name'=>'adminOne','email'=>'admin1@mail.com','user_type'=>'1','password'=>'12345678'],
       		['name'=>'userOne','email'=>'user1@mail.com','user_type'=>'0','password'=>'12345678']
       ];
       User::insert($userIn);
    }
}
