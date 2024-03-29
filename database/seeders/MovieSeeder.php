<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Super hero',
                'description' => 'Description of The Northman.',
                'genre_id' => 1, 
                'hall_id'=>2,
                'actors' => 'Actor 1, Actor 2',
                'producer' => 'Producer 1',
                'running_time' => 137,
                'image' => 'images/series-1.png',
                'publication_date' => '2022-03-01',
                'playing_date' => '2022-01-01',

                'rating' => 8.5,
                'quality' => 'HD',
            ],
            [
                'name' => 'Doctor Strange in the Multiverse of Madness',
                'description' => 'Description of Doctor Strange in the Multiverse of Madness.',
                'genre_id' => 4, 
                'hall_id'=>1,

                'actors' => 'Actor 3, Actor 4',
                'producer' => 'Producer 2',
                'running_time' => 126,
                'image' => 'images/series-2.png',
                'publication_date' => '2022-01-15',
                'playing_date' => '2022-01-01',

                'rating' => null, 
                'quality' => '4K',
            ],
            [
                'name' => 'Memory',
                'description' => 'Description of Memory.',
                'genre_id' => 3, 
                'hall_id'=>null,

                'actors' => 'Actor 5, Actor 6',
                'producer' => 'Producer 3',
                'running_time' => null, 
                'image' => 'images/upcoming-3.png',
                'publication_date' => '2022-02-01',
                'playing_date' => '2022-01-01',

                'rating' => null, 
                'quality' => '2K',
            ],
            [
                'name' => ' Unbearable Weight of Massive Talent',
                'description' => 'Description of The Unbearable Weight of Massive Talent.',
                'genre_id' => 4, 
                'hall_id'=>null,

                'actors' => 'Actor 7, Actor 8',
                'producer' => 'Producer 4',
                'running_time' => 107,
                'image' => 'images/series-3.png',
                'publication_date' => '2022-02-15',
                'playing_date' => '2022-01-01',

                'rating' => null, 
                'quality' => 'HD',
            ],
            [
                'name' => 'Sonic the Hedgehog 2',
                'description' => 'Description of Sonic the Hedgehog 2.',
                'genre_id' => 4, 
                'hall_id'=>null,

                'actors' => 'Actor 1, Actor 2',
                'producer' => 'Producer 1',
                'running_time' => 122,
                'image' => 'images/series-4.png',
                'publication_date' => '2022-01-01',
                'playing_date' => '2022-01-01',

                'rating' => 7.8, 
                'quality' => '2K',
            ],
            [
                'name' => 'Morbius',
                'description' => 'Description of Morbius.',
                'genre_id' => 4, 
                'hall_id'=>null,

                'actors' => 'Actor 3, Actor 4',
                'producer' => 'Producer 2',
                'running_time' => 104,
                'image' => 'images/movie-2.png',
                'publication_date' => '2022-01-01',
                'playing_date' => '2022-01-01',

                'rating' => 5.9, 
                'quality' => 'HD',
            ],
            [
                'name' => 'The Adam Project',
                'description' => 'Description of The Adam Project.',
                'genre_id' => 3, 
                'hall_id'=>null,

                'actors' => 'Actor 5, Actor 6',
                'producer' => 'Producer 3',
                'running_time' => 106,
                'image' => 'images/movie-3.png',
                'publication_date' => '2022-01-01',
                'playing_date' => '2022-01-01',

                'rating' => 7.0, 
                'quality' => '4K',
            ],
            [
                'name' => 'Free Guy',
                'description' => 'Description of Free Guy.',
                'genre_id' => 1, 
                'hall_id'=>null,

                'actors' => 'Actor 7, Actor 8',
                'producer' => 'Producer 4',
                'running_time' => 115,
                'image' => 'images/movie-4.png',
                'publication_date' => '2021-01-01',
                'playing_date' => '2022-01-01',

                'rating' => 7.7, 
                'quality' => '4K',
            ],
            [
                'name' => 'The Batman',
                'description' => 'Description of The Batman.',
                'genre_id' => 2, 
                'hall_id'=>null,

                'actors' => 'Actor 9, Actor 10',
                'producer' => 'Producer 5',
                'running_time' => 176,
                'image' => 'images/movie-5.png',
                'publication_date' => '2022-01-01',
                'playing_date' => '2022-01-01',

                'rating' => 7.9, 
                'quality' => '4K',
            ],
            [
                'name' => 'Uncharted',
                'description' => 'Description of Uncharted.',
                'genre_id' => 3, 
                'hall_id'=>null,

                'actors' => 'Actor 11, Actor 12',
                'producer' => 'Producer 6',
                'running_time' => 116,
                'image' => 'images/movie-6.png',
                'publication_date' => '2022-01-01',
                'playing_date' => '2022-01-01',

                'playing_date' => '2022-01-01',

                'rating' => 7.0, 
                'quality' => 'HD',
            ],
            [
                'name' => 'Death on the Nile',
                'description' => 'Description of Death on the Nile.',
                'genre_id' => 2, 
                'hall_id'=>null,

                'actors' => 'Actor 13, Actor 14',
                'producer' => 'Producer 7',
                'running_time' => 127,
                'image' => 'images/movie-7.png',
                'publication_date' => '2022-01-01',
                'playing_date' => '2022-01-01',

                'rating' => 6.5, 
                'quality' => '2K',
            ],
            [
                'name' => 'The King\'s Man',
                'description' => 'Description of The King\'s Man.',
                'genre_id' => 3, 
                'hall_id'=>null,

                'actors' => 'Actor 15, Actor 16',
                'producer' => 'Producer 8',
                'running_time' => 131,
                'image' => 'images/movie-8.png',
                'publication_date' => '2021-01-01',
                'playing_date' => '2022-01-01',

                'rating' => 7.0, 
                'quality' => 'HD',
            ],
            [
                'name' => 'The nbearable Weight of Massive Talent',
                'description' => 'Description of The Unbearable Weight of Massive Talent.',
                'genre_id' => 1, 
                'hall_id'=>null,

                'actors' => 'Actor 7, Actor 8',
                'producer' => 'Producer 4',
                'running_time' => 107,
                'image' => 'images/upcoming-4.png',
                'publication_date' => '2022-02-15',
                'playing_date' => '2022-01-01',

                'rating' => null, 
                'quality' => 'HD',
            ],
        ];
    
        foreach ($movies as &$movie) {
            $startTime = Carbon::parse($movie['playing_date']);
            $endTime = $startTime->copy()->addMinutes($movie['running_time']);
        
            // Format start time as hours and minutes (e.g., 8:00 PM)
            $movie['start_time'] = $startTime->format('g:i A');
        
            // Format end time as hours and minutes (e.g., 11:00 PM)
            $movie['end_time'] = $endTime->format('g:i A');
        }
        
foreach ($movies as &$movie) {
    $slug = Str::slug($movie['name']);
    $uniqueSlug = $slug;
    $counter = 1;
    while (Movie::where('slug', $uniqueSlug)->exists()) {
        $uniqueSlug = $slug . '-' . $counter++;
    }
    $movie['slug'] = $uniqueSlug;
    Log::info("name: {$movie['name']}, Slug: {$movie['slug']}");
}

        Movie::insert($movies);
    }
}
