<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DirectorinmoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('directorinmovies')->delete();
        
        \DB::table('directorinmovies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 15,
                'director_id' => 1,
                'created_at' => '2021-05-21 03:54:02',
                'updated_at' => '2021-05-21 03:54:02',
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 14,
                'director_id' => 1,
                'created_at' => '2021-05-21 03:54:25',
                'updated_at' => '2021-05-21 03:54:25',
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 13,
                'director_id' => 1,
                'created_at' => '2021-05-21 03:54:44',
                'updated_at' => '2021-05-21 03:54:44',
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 6,
                'director_id' => 1,
                'created_at' => '2021-05-21 03:54:53',
                'updated_at' => '2021-05-21 03:54:53',
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 24,
                'director_id' => 2,
                'created_at' => '2021-05-21 03:57:28',
                'updated_at' => '2021-05-21 03:57:28',
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 34,
                'director_id' => 2,
                'created_at' => '2021-05-21 03:57:36',
                'updated_at' => '2021-05-21 03:57:36',
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 8,
                'director_id' => 2,
                'created_at' => '2021-05-21 03:57:46',
                'updated_at' => '2021-05-21 03:57:46',
            ),
        ));
        
        
    }
}