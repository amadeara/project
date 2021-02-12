<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->insert([

            [
                'genre_id' => 1,
                'title' => 'Descendants of The Sun',
                'photo' => 'dots.jpg',
                'description' => 'A love story between Captain Yoo Shi Jin, Korean Special Forces, and Doctor Kang Mo Yeon, 
                surgeon at Haesung Hospital. Together they face danger in a war-torn country.',
                'rating' => 4
            ],
    
            [
                'genre_id' => 1,
                'title' => 'Goblin',
                'photo' => 'goblin.jpg',
                'description' => 'Can Eun Tak be the true “goblin bride” with the power to release Kim Shin from his eternal misery? 
                “Guardian: The Lonely and Great God”, also known as "Goblin", is a 2016-2017 South Korean drama series directed by Lee Eung Bok. 
                It is written by Kim Eun Sook, who also wrote the very successful dramas: “Heirs” (2013) and “Descendants of the Sun” (2016).',
                'rating' => 4
            ],
            [
                'genre_id' => 2,
                'title' => 'Frozen',
                'photo' => 'frozen.jpg',
                'description' => 'Anna sets out on a journey with an iceman, Kristoff, and his reindeer, Sven, in order to find her sister, 
                Elsa, who has the power to convert any object or person into ice.',
                'rating' => 4
            ],
            [
                'genre_id' => 2,
                'title' => 'Frozen 2',
                'photo' => 'frozen2.jpg',
                'description' => 'Elsa the Snow Queen has an extraordinary gift -- the power to create ice and snow. But no matter how happy 
                she is to be surrounded by the people of Arendelle, Elsa finds herself strangely unsettled. After hearing a mysterious voice 
                call out to her, Elsa travels to the enchanted forests and dark seas beyond her kingdom -- an adventure that soon turns into 
                a journey of self-discovery',
                'rating' => 4
            ],
            [
                'genre_id' => 3,
                'title' => 'Hannah Montana',
                'photo' => 'hannah.jpg',
                'description' => 'Miley Stewart, an average teenage girl, lives a double life as a famous pop singer named Hannah Montana and 
                constantly tries to conceal her true identity from the public.',
                'rating' => 4
            ],
            [
                'genre_id' => 3,
                'title' => 'F.R.I.E.N.D.S',
                'photo' => 'friends.jpg',
                'description' => 'Follow the lives of six reckless adults living in Manhattan, as they indulge in adventures 
                which make their lives both troublesome and happening.',
                'rating' => 4
            ]
          
            ]);
    }
}
