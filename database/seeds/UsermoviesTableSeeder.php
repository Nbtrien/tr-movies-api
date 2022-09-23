<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsermoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usermovies')->delete();
        
        \DB::table('usermovies')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'movie_id' => 6,
                'created_at' => '2021-05-01 15:24:25',
                'updated_at' => '2021-05-01 15:24:25',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'movie_id' => 30,
                'created_at' => '2021-05-01 15:27:10',
                'updated_at' => '2021-05-01 15:27:10',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'movie_id' => 29,
                'created_at' => '2021-05-01 15:30:41',
                'updated_at' => '2021-05-01 15:30:41',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'movie_id' => 6,
                'created_at' => '2021-05-01 15:39:37',
                'updated_at' => '2021-05-01 15:39:37',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'movie_id' => 8,
                'created_at' => '2021-05-01 15:40:02',
                'updated_at' => '2021-05-01 15:40:02',
            ),
            5 => 
            array (
                'id' => 7,
                'user_id' => 3,
                'movie_id' => 35,
                'created_at' => '2021-05-23 17:22:30',
                'updated_at' => '2021-05-23 17:22:30',
            ),
            6 => 
            array (
                'id' => 13,
                'user_id' => 16,
                'movie_id' => 6,
                'created_at' => '2021-05-25 15:00:44',
                'updated_at' => '2021-05-25 15:00:44',
            ),
            7 => 
            array (
                'id' => 14,
                'user_id' => 16,
                'movie_id' => 6,
                'created_at' => '2021-05-25 15:00:44',
                'updated_at' => '2021-05-25 15:00:44',
            ),
            8 => 
            array (
                'id' => 15,
                'user_id' => 16,
                'movie_id' => 22,
                'created_at' => '2021-05-26 13:54:34',
                'updated_at' => '2021-05-26 13:54:34',
            ),
            9 => 
            array (
                'id' => 23,
                'user_id' => 2,
                'movie_id' => 8,
                'created_at' => '2021-06-04 03:20:40',
                'updated_at' => '2021-06-04 03:20:40',
            ),
            10 => 
            array (
                'id' => 24,
                'user_id' => 16,
                'movie_id' => 40,
                'created_at' => '2021-08-13 02:08:58',
                'updated_at' => '2021-08-13 02:08:58',
            ),
        ));
        
        
    }
}