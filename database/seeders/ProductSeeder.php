<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
       
          [
              "name" => "lg TV",
          
              "description" => "smart tv ",
              "category" => "tv",
              "price" => "30000",
              'gallery' => 'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1605298368/Croma%20Assets/Entertainment/Television/Images/8797438017566.png'
          ],
              [
                  "name" => "Smart Watch",
                 
                  "description" => "smart watch 4 ram",
                  "category" => "watch",
                  "price" => "300",
                  'gallery' => 'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1606588180/Croma%20Assets/Communication/Wearable%20Devices/Images/8979165446174.png'
              ],
              [
                  "name" => " Oppo Phone",
                
                  "description" => "smart  phone 16ram 1tera hard",
                  "category" => "phone",
                  "price" => "4500",
                  'gallery' => 'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1605203001/Croma%20Assets/Communication/Mobiles/Images/8952896356382.png'

              ],
              [
                  "name" => " Samsung Phone",
                 
                  "description" => "smart  phone 16ram 1tera hard",
                  "category" => "phone",
                  "price" => "5000",
                  'gallery' =>'https://icons.iconarchive.com/icons/jonathan-rey/devices-pack-3/256/Smartphone-Android-Jelly-Bean-Samsung-Galaxy-S4-icon.png'
              ],
              [
              "name" => " Nokia Phone",
          
              "description" => "smart  phone 16ram 1tera hard",
              "category" => "phone",
              "price" => "5800",
              'gallery'=>'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1605255399/Croma%20Assets/Communication/Mobiles/Images/8857344049182.png'
             ]
              ]
      );
    }
}
