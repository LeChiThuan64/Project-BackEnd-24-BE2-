<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <30 ; $i++) { 
            Image::create([
            'name' => 'p'.$i.'.jpg',
            'product_id' => $i
        ]);
        }
    }
}
