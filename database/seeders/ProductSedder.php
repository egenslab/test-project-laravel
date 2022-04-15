<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'One Plus Nord CE-5G',
            'price' => 100,
            'image' => 'https://static-01.daraz.com.bd/p/4c0304e09694f707969db20fb11ae17f.jpg',
            'detail' => 'NO RETURN applicable if the seal in broken',
            'author_name' => 'Zahid'
        ]);

        Product::create([
            'name' => 'Motorola G9 Play',
            'price' => 500,
            'image' => 'https://static-01.daraz.com.bd/p/392b6a21b1f0af1525cf52ad8e441d9b.jpg',
            'detail' => 'Battery Capacity: 8800mAh (32.56wh),Type: multi-output mini ups',
            'author_name' => 'Daraz'
        ]);

        Product::create([
            'name' => 'WGP Mini Ups WGP103-5V 12V 12V for router',
            'price' => 1500,
            'image' => 'https://static-01.daraz.com.bd/p/73e934f0075559a7ac02f70a8590860f.jpg',
            'detail' => 'Product details of WGP Mini Ups WGP103-5V 12V 12V for router onu cctv camera etc',
            'author_name' => 'Daraz'
        ]);

        Product::create([
            'name' => 'HIKVISION Switching Adapter',
            'price' => 2500,
            'image' => 'https://static-01.daraz.com.bd/p/15ce6b66fb0968160d8165c4d43d28f3.jpg',
            'detail' => 'Product details of HIKVISION Switching Adapter',
            'author_name' => 'Daraz'
        ]);

        Product::create([
            'name' => 'Long Sleeve Ladies Sweater With Button',
            'price' => 2500,
            'image' => 'https://static-01.daraz.com.bd/p/2481b5df9021d904a1389c18a00c498b.jpg',
            'detail' => 'Product details of Long Sleeve Ladies Sweater With Button',
            'author_name' => 'Daraz'
        ]);

        Product::create([
            'name' => 'Women`s Winter Cotton Long Sleeve Jacket',
            'price' => 2500,
            'image' => 'https://static-01.daraz.com.bd/p/368300053c6e4d34babe46203086ae43.jpg',
            'detail' => 'Product details of Long Sleeve Ladies Sweater With Button',
            'author_name' => 'Daraz'
        ]);

        Product::create([
            'name' => 'Women`s Winter Cotton Long Sleeve Jacket',
            'price' => 2500,
            'image' => 'https://static-01.daraz.com.bd/p/368300053c6e4d34babe46203086ae43.jpg',
            'detail' => 'Product details of Long Sleeve Ladies Sweater With Button',
            'author_name' => 'Daraz'
        ]);

        Product::create([
            'name' => 'Women’s High neck sweater (black)',
            'price' => 500,
            'image' => 'https://static-01.daraz.com.bd/p/ec68dc4727e0570eb147bf8baeb76789.jpg',
            'detail' => 'This sweateris perfect for men’s and smart person. The attractive and fashionable sweate...',
            'author_name' => 'Daraz'
        ]);
    }
}
