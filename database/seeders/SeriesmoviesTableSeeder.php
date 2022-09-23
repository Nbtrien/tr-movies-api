<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeriesmoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seriesmovies')->delete();
        
        \DB::table('seriesmovies')->insert(array (
            0 => 
            array (
                'id' => 4,
                'category_id' => 2,
                'movie_id' => 8,
                'episodes' => 8,
                'created_at' => '2021-04-20 17:26:57',
                'updated_at' => '2021-04-20 17:26:57',
            ),
            1 => 
            array (
                'id' => 5,
                'category_id' => 2,
                'movie_id' => 9,
                'episodes' => 6,
                'created_at' => '2021-04-20 17:32:18',
                'updated_at' => '2021-04-21 13:39:49',
            ),
            2 => 
            array (
                'id' => 6,
                'category_id' => 2,
                'movie_id' => 10,
                'episodes' => 6,
                'created_at' => '2021-04-21 14:33:48',
                'updated_at' => '2021-04-21 14:33:48',
            ),
            3 => 
            array (
                'id' => 7,
                'category_id' => 2,
                'movie_id' => 11,
                'episodes' => 8,
                'created_at' => '2021-04-21 14:46:37',
                'updated_at' => '2021-04-21 14:46:37',
            ),
            4 => 
            array (
                'id' => 8,
                'category_id' => 2,
                'movie_id' => 12,
                'episodes' => 8,
                'created_at' => '2021-04-21 14:51:12',
                'updated_at' => '2021-04-21 14:51:12',
            ),
            5 => 
            array (
                'id' => 9,
                'category_id' => 2,
                'movie_id' => 22,
                'episodes' => 8,
                'created_at' => '2021-04-26 02:57:57',
                'updated_at' => '2021-04-26 02:57:57',
            ),
            6 => 
            array (
                'id' => 10,
                'category_id' => 2,
                'movie_id' => 23,
                'episodes' => 10,
                'created_at' => '2021-04-26 15:42:45',
                'updated_at' => '2021-04-26 15:42:45',
            ),
            7 => 
            array (
                'id' => 11,
                'category_id' => 2,
                'movie_id' => 24,
                'episodes' => 8,
                'created_at' => '2021-04-29 15:22:51',
                'updated_at' => '2021-04-29 15:22:51',
            ),
            8 => 
            array (
                'id' => 12,
                'category_id' => 2,
                'movie_id' => 34,
                'episodes' => 9,
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            9 => 
            array (
                'id' => 13,
                'category_id' => 2,
                'movie_id' => 41,
                'episodes' => 10,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            10 => 
            array (
                'id' => 14,
                'category_id' => 2,
                'movie_id' => 43,
                'episodes' => 6,
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            11 => 
            array (
                'id' => 15,
                'category_id' => 2,
                'movie_id' => 44,
                'episodes' => 6,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
        ));
        
        
    }
}