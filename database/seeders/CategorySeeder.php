<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Áo Polo', 'slug' => 'ao-polo', 'created_at' => now()],
            ['name' => 'Áo Sơ Mi', 'slug' => 'ao-so-mi', 'created_at' => now()],
            ['name' => 'Quần', 'slug' => 'quan', 'created_at' => now()],
            ['name' => 'Giày', 'slug' => 'giay', 'created_at' => now()],
            ['name' => 'Phụ Kiện', 'slug' => 'phu-kien', 'created_at' => now()],
        ]);
    }
}
