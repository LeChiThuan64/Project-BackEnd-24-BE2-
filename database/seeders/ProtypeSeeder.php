<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('protypes')->insert([
            [
                // 1
                'type_name' => 'Dresses',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 2
                'type_name' => 'Shoes',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 3
                'type_name' => 'Shirts',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 4
                'type_name' => 'LapTops',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 5
                'type_name' => 'Cameras',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 6
                'type_name' => 'Smart Watchs',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
