<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sizes')->insert([
            ['name' => 'SIZE: S', 'created_at' => now()],
            ['name' => 'SIZE: M', 'created_at' => now()],
            ['name' => 'SIZE: L', 'created_at' => now()],
            ['name' => 'SIZE: XL', 'created_at' => now()],
            ['name' => 'SIZE: XXL', 'created_at' => now()],
            ['name' => 'SIZE: 30', 'created_at' => now()],
            ['name' => 'SIZE: 31', 'created_at' => now()],
            ['name' => 'SIZE: 32', 'created_at' => now()],
            ['name' => 'SIZE: 33', 'created_at' => now()],
            ['name' => 'SIZE: 34', 'created_at' => now()],
            ['name' => 'FREE SIZE', 'created_at' => now()],
       ]);
    }
}
