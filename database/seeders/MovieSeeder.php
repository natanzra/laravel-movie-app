<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'genre_id' => '1',
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ]);
    
        Movie::create([
            'id' => 2,
            'title' => 'Noragami',
            'genre_id' => '2',
            'poster' => 'movie-02.jpg',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ]);
    
        Movie::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'genre_id' => '3',
            'poster' => 'movie-03.jpg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);
        Movie::create([
            'id' => 4,
            'title' => 'SPY x Family',
            'genre_id' => '4',
            'poster' => 'movie-04.jpg',
            'synopsis' => 'Tensei Shitara Slime Datta Ken atau disingkat Tensura bercerita tentang seorang pria pekerja kantoran yang bernama Satoru Mikami yang bereinkarnasi sebagai slime setelah terbunuh oleh seorang kriminal. Di dunia baru tersebut, slime tersebut bertemu seekor naga bernama Veldora dan menjalin persahabatan.',
        ]);
        Movie::create([
            'id' => 5,
            'title' => 'Kuroko No Basket',
            'genre_id' => '5',
            'poster' => 'movie-05.jpg',
            'synopsis' => 'Ceritanya mengisahkan petualangan Monkey D. Luffy, seorang anak laki-laki yang memiliki kemampuan tubuh elastis seperti karet setelah memakan Buah Iblis secara tidak disengaja. Luffy bersama kru bajak lautnya, yang dinamakan Bajak Laut Topi Jerami, menjelajahi Grand Line untuk mencari harta karun terbesar di dunia yang dikenal sebagai "One Piece" dalam rangka untuk menjadi Raja Bajak Laut yang berikutnya.',
        ]);
        Movie::create([
            'id' => 6,
            'title' => 'Spirited away',
            'genre_id' => '5',
            'poster' => 'movie-06.jpg',
            'synopsis' => 'asasas.',
        ]);
    }
}
