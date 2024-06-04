<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'id' => 1,
            'name' => 'Shounen',
            'description' => 'Shonen manga is an editorial category of Jaapanase comic'
        ]);
        
        Genre::create([
            'id' => 2,
            'name' => 'School',
            'description' => 'It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.'
        ]);

        Genre::create([
            'id' => 3,
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.'
        ]);

        Genre::create([
            'id' => 4,
            'name' => 'Action',
            'description' => 'Some of the characters are involved in challenges that require physical strength or special abilities'
        ]);

        Genre::create([
            'id' => 5,
            'name' => 'Shoujo',
            'description' => 'Anime, manga, or video games targeted at girls who are still in school.'
        ]);
        Genre::create([
            'id' => 6,
            'name' => 'Horror',
            'description' => 'Horrorrr wiwiwi.'
        ]);
    }
}
