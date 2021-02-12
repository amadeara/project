<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([

            [
                'name' => 'Drama',
            ],
            [
                'name' => 'Kids',
            ],
            [
                'name' => 'TV Shows',
            ]
        ]);
    }
}
