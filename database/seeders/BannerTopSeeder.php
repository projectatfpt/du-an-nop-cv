<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerTopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banner_tops')->insert([
            ['name' => 'Quần Áo Hot 2024', 'image'=>'img/banner/banner-1.jpg','link'=>'http://127.0.0.1:8000/shop', 'created_at' => now()],
            ['name' => 'Phụ Kiện Hot 2024', 'image'=>'img/banner/banner-2.jpg','link'=>'http://127.0.0.1:8000/shop/phu-kien', 'created_at' => now()],
            ['name' => 'Giày Hot 2024', 'image'=>'img/banner/banner-3.jpg','link'=>'http://127.0.0.1:8000/shop/giay', 'created_at' => now()],
        ]);
    }
}
