<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sizes')->insert([
            ['name' => 'Quần áo', 'created_at' => now()],
            ['name' => 'Áo', 'created_at' => now()],
            ['name' => 'Áo sơ mi', 'created_at' => now()],
            ['name' => 'Áo polo', 'created_at' => now()],
            ['name' => 'Quần', 'created_at' => now()],
            ['name' => 'Quần tây', 'created_at' => now()],
            ['name' => 'Quần short', 'created_at' => now()],
            ['name' => 'Quần thun', 'created_at' => now()],
            ['name' => 'Quần jean', 'created_at' => now()],
            ['name' => 'Phụ kiện', 'created_at' => now()],
            ['name' => 'Thắt lưng', 'created_at' => now()],
            ['name' => 'Kính', 'created_at' => now()],
            ['name' => 'Giày', 'created_at' => now()],
            ['name' => 'Giày tây', 'created_at' => now()],
            ['name' => 'Giày vải', 'created_at' => now()],
            ['name' => 'Tất', 'created_at' => now()],
       ]);
    }
}
