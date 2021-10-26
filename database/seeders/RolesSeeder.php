<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Symfony\Component\HttpFoundation\Request;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('roles')->insert([
          'name'=>'superadmin',
          'display_name'=>'superadmin',
          'description'=>'can do any thing',
        ]);
        DB::table('roles')->insert([
          'name'=>'user',
          'display_name'=>'user',
          'description'=>'can do spacific tasks delete users',
        ]);
        DB::table('roles')->insert([
          'name'=>'manger',
          'display_name'=>'manger',
          'description'=>'can modify admin',
        ]);
      }
}
