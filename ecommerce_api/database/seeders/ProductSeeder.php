<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $imgUrl = 'https://raw.githubusercontent.com/HasanMuslemani/EcommerceImages/main/images/';

        /*** PHONES ***/
        DB::table('products')->insert([
            'name' => 'iPhone XR 64GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "iphonexr.jpg",
            'price' => 379.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'iPhone 11 64GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "iphone11.jpg",
            'price' => 599.35,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'iPhone 8 64GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "iphone8.jpg",
            'price' => 244.43,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'iPhone SE 2020 64GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "iphonese.jpg",
            'price' => 303.25,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A53 128GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "sga53.jpg",
            'price' => 529.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy A12 128GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "sga12.jpg",
            'price' => 300.62,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S10 128GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "sgs10.jpg",
            'price' => 759.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S20 128GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "sgs20.jpg",
            'price' => 949.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S9 64GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "sgs9.jpg",
            'price' => 239.50,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Google Pixel 6 128GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "pixel6.jpg",
            'price' => 784.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Google Pixel 4 64GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "pixel4.jpg",
            'price' => 339.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Google Pixel 5A 128GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "pixel5a.jpg",
            'price' => 539.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Google Pixel 3 64GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "pixel3.jpg",
            'price' => 239.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Fire 7 Tablet 16GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "fire7.jpg",
            'price' => 69.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy Tab A7 32GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "sgtaba7.jpg",
            'price' => 209.98,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Fire HD 8 Tablet 32GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "fire8.jpg",
            'price' => 109.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Fire HD 10 Tablet 32GB',
            'category' => 'electronics',
            'img_url' => $imgUrl . "fire10.jpg",
            'price' => 199.99,
            'quantity' => 30
        ]);

        /*** Games ***/
        DB::table('products')->insert([
            'name' => 'Battlefield 2042 - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1battlefield.jpg",
            'price' => 19.96,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Spyro Reignited Trilogy - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1spyro.jpg",
            'price' => 37.95,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'LEGO Star Wars Skywalker Saga - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1starwars.jpg",
            'price' => 59.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Assassin\'s Creed Valhalla - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1assasincreed.jpg",
            'price' => 29.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Call of Duty: WWII - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1codww2.jpg",
            'price' => 36.95,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Jumanji: The Video Game - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1jumanji.jpg",
            'price' => 29.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'NBA 2k22 - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1nba22.jpg",
            'price' => 19.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Madden NFL 22 - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1madden22.jpg",
            'price' => 19.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'NHL 22 - Xbox One',
            'category' => 'games',
            'img_url' => $imgUrl . "x1nhl22.jpg",
            'price' => 16.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Elden Ring - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5eldenring.jpg",
            'price' => 75.35,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'NBA 2k22 - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5nba22.jpg",
            'price' => 59.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Marvel’s Spider-Man: Miles Morales - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5spiderman.jpg",
            'price' => 64.96,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Demon\'s Souls - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5demonsouls.jpg",
            'price' => 79.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Marvel’s Spider-Man: Miles Morales - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5spiderman.jpg",
            'price' => 64.96,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Dying Light 2 Stay Human - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5dylinglight.jpg",
            'price' => 69.95,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Battlefield 2042 - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5battlefield.jpg",
            'price' => 19.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Horizon Forbidden West - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5horizon.jpg",
            'price' => 89.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Hogwarts Legacy - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5hogwarts.jpg",
            'price' => 89.96,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Mortal Kombat 11: Ultimate Edition - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5mortalcombat.jpg",
            'price' => 39.96,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Final Fantasy VII Remake Intergrade - PlayStation 5',
            'category' => 'games',
            'img_url' => $imgUrl . "ps5finalfantasy.jpg",
            'price' => 89.89,
            'quantity' => 30
        ]);

        /*** Other ***/
        DB::table('products')->insert([
            'name' => 'New Apple AirPods (3rd Generation)',
            'category' => 'other',
            'img_url' => $imgUrl . "airpods.jpg",
            'price' => 239.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'HDMI Cord 8K Ultra High-Speed 48Gbps Lead',
            'category' => 'other',
            'img_url' => $imgUrl . "hdmicord.jpg",
            'price' => 19.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Impact Elite Wireless Gaming Mouse',
            'category' => 'other',
            'img_url' => $imgUrl . "mouse.jpg",
            'price' => 50.24,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Wireless Earbuds, Meidong KY06',
            'category' => 'other',
            'img_url' => $imgUrl . "wirelessearbuds.jpg",
            'price' => 50.24,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Apple AirPods Max - Pink',
            'category' => 'other',
            'img_url' => $imgUrl . "airpodsmax.jpg",
            'price' => 778.98,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'USB C Charger',
            'category' => 'other',
            'img_url' => $imgUrl . "usbccharger.jpg",
            'price' => 13.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Ailun 2 Pack Screen Protector Compatible for iPhone 13 Pro Max [6.7 inch]',
            'category' => 'other',
            'img_url' => $imgUrl . "screenprotector.jpg",
            'price' => 7.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Seagate Portable 2TB External Hard Drive Portable HDD',
            'category' => 'other',
            'img_url' => $imgUrl . "harddrive.jpg",
            'price' => 79.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'SanDisk 128GB Ultra MicroSDXC',
            'category' => 'other',
            'img_url' => $imgUrl . "sdcard.jpg",
            'price' => 20.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Anker Portable Charger, 325 Power Bank',
            'category' => 'other',
            'img_url' => $imgUrl . "portablecharger.jpg",
            'price' => 59.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Apple EarPods with Lightning Connector - White',
            'category' => 'other',
            'img_url' => $imgUrl . "earpods.jpg",
            'price' => 24.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Apple 20W USB-C Power Adapter',
            'category' => 'other',
            'img_url' => $imgUrl . "poweradapter.jpg",
            'price' => 24.99,
            'quantity' => 30
        ]);
        DB::table('products')->insert([
            'name' => 'Smart Watch for Android and iOS Phone',
            'category' => 'other',
            'img_url' => $imgUrl . "smartwatch.jpg",
            'price' => 47.99,
            'quantity' => 30
        ]);
    }
}
