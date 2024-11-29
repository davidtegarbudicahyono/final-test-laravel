<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('products')->insert([
            'name' => 'Televisi 40 Inch',
            'image_url' => 'https://www.tokopedia.com/memorymdn/changhong-40-inch-digital-led-tv-l40g5w-fhd-tv-hdmi-usb-moive?utm_source=google&utm_medium=organic&utm_campaign=pdp',
            'price' => 3500000,
            'stock' => 10,
            'category_id' => 1, 
            'brand_id' => 2,   
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('products')->insert([
            'name' => 'Sepatu Olahraga',
            'image_url' => 'https://www.lazada.co.id/products/sepatu-running-adidas-adizero-sl-id6924-20232-i7718794747.html',
            'price' => 750000,
            'stock' => 20,
            'category_id' => 2, 
            'brand_id' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        // Tambahkan data lainnya sesuai kebutuhan
    }
}
