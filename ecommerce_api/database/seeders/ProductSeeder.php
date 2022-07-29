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
    }
}
