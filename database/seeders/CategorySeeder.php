<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'clothing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'electronics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'health & beauty',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
