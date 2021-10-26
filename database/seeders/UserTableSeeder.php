<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=\App\Models\User::create([
          'name'=>'super_admin1',
          'email'=>'super_admin1@gmail.com',
          'password'=>'12345'
        ]);
        $user->attachRole('superadmin');
        $user=\App\Models\User::create([
          'name'=>'user3',
          'email'=>'user3@gmail.com',
          'password'=>'12345'
        ]);
        $user->attachRole('user');
    }
}
