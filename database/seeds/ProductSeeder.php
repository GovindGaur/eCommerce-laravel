<?php

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
        DB::table('products')->insert([
        [
        'name' => 'Lg',
        'price' => 10000,
        'description' => 'This is Smart Mobile',
        'categery'=>'LG',
        'gallery'=>'https://rukminim1.flixcart.com/image/416/416/kkbh8cw0/mobile/f/2/o/k42-lmk420ymw-lg-original-imafzp3yrjcmapsz.jpeg?q=70'
    ],
    [
        'name' => 'Samsung',
        'price' => 12000,
        'description' => 'This is Smart Mobile',
        'categery'=>'Samsung a8',
        'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmxBCZvfsA6sruJiDWUBA7k88rGkWmCKZSXr4JSQl8iocKKHAWKxN9ziBcXqIusOUjCYk&usqp=CAU'
    ],
    [
        'name' => 'Samsung',
        'price' => 1200,
        'description' => 'This is Best Mobile',
        'categery'=>'Samsung A30',
        'gallery'=>'https://freepngimg.com/thumb/samsung_mobile_phone/5-2-samsung-mobile-phone-png-hd.png'
    ],
    [
        'name' => 'MI',
        'price' => 12000,
        'description' => 'This is Smart Mobile',
        'categery'=>'MI',
        'gallery'=>'https://i01.appmifile.com/webfile/globalimg/7/8258D0C6-1CF6-6841-3342-D0C2D1DFDE63.jpg'
    ]
    ]);
    }
}