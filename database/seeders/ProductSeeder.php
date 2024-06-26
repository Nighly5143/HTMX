<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Laptop Asus',
                'desc' => 'Enjoy stunning clarity and vibrant colors with this Asus Laptop.',
                'qty' => 10.00,
                'price' => 45000.00
            ],
            [
                'name' => 'Wireless Rechargable Mouse',
                'desc' => 'A new technology, Wireless Rechargable Mouse with 5G and Bluetooth Technology.',
                'qty' => 10.00,
                'price' => 1000.00
            ],
            [
                'name' => 'Nike Cap',
                'desc' => 'High-quality Nike Cap.',
                'qty' => 10.00,
                'price' => 500.00
            ],
            [
                'name' => 'Smart Apple Watch',
                'desc' => 'Track your heart rate, steps, and sleep with this water-resistant smart apple watch device.',
                'qty' => 10.00,
                'price' => 2500.00
            ],
            [
                'name' => 'Adidas White Shoes',
                'desc' => 'Branded ni dili ni inukay.',
                'qty' => 10.00,
                'price' => 1500.00
            ],
        ];
        foreach($products as $prod) {
            Product::create($prod);
        }
    }
}
