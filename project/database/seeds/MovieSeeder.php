<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        //
        DB::table('movies')->insert([
            'movie_id' => '1',
            'movie_name' => 'Ironman',
            'image' => 'https://2.bp.blogspot.com/-bAYO-ksWyGQ/WddI0MCJ2aI/AAAAAAAAAD0/_gL6XnFZKKgVHZA-8oZkTu5AlIQzDN89gCLcBGAs/s640/Iron-Man-1.jpg',
            'language' => 'EN',
            'description' => 'Iron Man is a fictional superhero appearing in American comic books published by Marvel Comics. The character was co-created by writer and editor Stan Lee, developed by scripter Larry Lieber, and designed by artists Don Heck and Jack Kirby.',
            'price' => 25,
            'id' => '1'
        ]);

        DB::table('movies')->insert([
            'movie_id' => '2',
            'movie_name' => 'Justice League',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/3/31/Justice_League_film_poster.jpg',
            'language' => 'EN',
            'description' => 'Fueled by his restored faith in humanity and inspired by Superman selfless act, Bruce Wayne enlists the help of his new-found ally, Diana Prince, to face an even greater enemy.',
            'price' => 30,
            'id' => '2'

        ]);
    }
}
