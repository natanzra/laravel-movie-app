<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run() : void
    {
        Review::create([
            'id' => 1, 
            'movie_id' => '1',  
            'user' => 'Zaneta', 
            'rating' => '8/10', 
            'date' => '2021-11-12',
        ]);
        Review::create([
            'id' => 2, 
            'movie_id' => '2',  
            'user' => 'Keil', 
            'rating' => '5/10', 
            'date' => '2020-01-12', 
        ]);
        Review::create([
            'id' => 3, 
            'movie_id' => '3',  
            'user' => 'Natnut', 
            'rating' => '10/10', 
            'date' => '2023-12-12', 
        ]);
        Review::create([
            'id' => 4, 
            'movie_id' => '4', 
            'user' => 'Caressa', 
            'rating' => '6/10', 
            'date' => '2020-10-10', 
        ]);
        Review::create([
            'id' => 5, 
            'movie_id' => '5', 
            'user' => 'Nora', 
            'rating' => '8,5/10', 
            'date' => '2024-07-12', 
        ]);
 
    }
}