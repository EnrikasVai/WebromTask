<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::insert([
            [
                'name' => 'Akrobatikos pamakos',
                'price' => 12.50,
                'latitude' => 54.6872,
                'longitude' => 25.2797,
                'street' => 'Gedimino pr. 1',
                'city' => 'Vilnius',
                'category' => 'akrobatika',
                'type' => 'grupe',
                'rating' => 4.5,
                'rating_count' => 4,
                'photo_url' => 'https://example.com/images/yoga.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Begimo treniruotes',
                'price' => 10.00,
                'latitude' => 54.6900,
                'longitude' => 25.2700,
                'street' => 'Vilniaus g. 3',
                'city' => 'Vilnius',
                'category' => 'lengvoji atletika',
                'type' => 'grupe',
                'rating' => 4.0,
                'rating_count' => 4,
                'photo_url' => 'https://example.com/images/swimming.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
