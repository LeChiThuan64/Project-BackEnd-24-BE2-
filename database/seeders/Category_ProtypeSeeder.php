<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Category_ProtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_protype')->insert([
            [
                'category_id' => '1',
                'type_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => '1',
                'type_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => '1',
                'type_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_id' => '2',
                'type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => '2',
                'type_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => '2',
                'type_id' => '6',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
