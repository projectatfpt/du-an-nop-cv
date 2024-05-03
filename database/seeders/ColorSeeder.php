<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colors')->insert([
            ['name' => 'MÀU: TRẮNG', 'created_at' => now()],
            ['name' => 'MÀU: VÀNG', 'created_at' => now()],
            ['name' => 'MÀU: ĐEN', 'created_at' => now()],
            ['name' => 'MÀU: LAM', 'created_at' => now()],
            ['name' => 'MÀU: LỤC', 'created_at' => now()],
            ['name' => 'MÀU: TÍM', 'created_at' => now()],
            ['name' => 'MÀU: BE', 'created_at' => now()],
            ['name' => 'MÀU: XÁM', 'created_at' => now()],
            ['name' => 'MÀU: HỒNG', 'created_at' => now()],
        ]);
    }
}
