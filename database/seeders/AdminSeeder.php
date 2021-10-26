<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      /*  DB::table('admins')->insert(
          [
              'name'=>'ahmed',
              'email'=>'ahmed@gmail.com',
              'password'=>'12345',
              'photo'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNq-fhMeQRIAFfcfgPFaQDO8yTQ_SOW1-6raA_0HgiiKDJTV0TkDiojPT98h40g8T4FAk&usqp=CAU'
          ]);*/
       /*  $admin=\App\Models\Admin::create(
          [
            'name'=>'admin1',
            'email'=>'admin1@gmail.com',
            'password'=>'12345',
            'photo'=>'https://theaccidentaladmins.com/wp-content/uploads/2018/02/cropped-AdminsNewCentered.png'
          ]);
           $admin->attachRole('superadmin');
           */
           $admin=\App\Models\Admin::create(
            [
              'name'=>'manger',
              'email'=>'manger@gmail.com',
              'password'=>'12345',
              'photo'=>'https://theaccidentaladmins.com/wp-content/uploads/2018/02/cropped-AdminsNewCentered.png'
            ]);
            // $admin->attachRole('manger');
     
    }
}
