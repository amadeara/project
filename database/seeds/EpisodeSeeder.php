<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episode')->insert([

            [
                'movie_id' => 1,
                'episode' => 1,
                'title' => 'Love at First Sight',
            ],

            [
                'movie_id' => 2,
                'episode' => 1,
                'title' => 'Finding the Bride',
            ],
            [
                'movie_id' => 3,
                'episode' => 1,
                'title' => 'Frozen',
            ],
            [
                'movie_id' => 4,
                'episode' => 1,
                'title' => 'Frozen 2',
            ],
            [
                'movie_id' => 5,
                'episode' => 1,
                'title' => 'Suprstar',
            ],
            [
                'movie_id' => 6,
                'episode' => 1,
                'title' => 'The One With The Wedding Dress',
            ]
  
        ]);
    }
}
