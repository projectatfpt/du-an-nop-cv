<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name' => 'ALong', 'slug'=>'along', 'created_at' => now()],
            ['name' => 'Chanel', 'slug'=>'chanel', 'created_at' => now()],
            ['name' => 'Hermès', 'slug'=>'hermes', 'created_at' => now()],
            ['name' => 'Gucci ', 'slug'=>'gucci', 'created_at' => now()],
            ['name' => 'Dior', 'slug'=>'dior', 'created_at' => now()],
        ]);
    }
}
