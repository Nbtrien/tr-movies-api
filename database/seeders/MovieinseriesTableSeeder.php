<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MovieinseriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movieinseries')->delete();
        
        \DB::table('movieinseries')->insert(array (
            0 => 
            array (
                'id' => 3,
                'movie_id' => 13,
                'series_id' => 3,
                'created_at' => '2021-05-08 05:51:54',
                'updated_at' => '2021-05-08 05:51:54',
            ),
            1 => 
            array (
                'id' => 4,
                'movie_id' => 14,
                'series_id' => 3,
                'created_at' => '2021-05-08 05:51:54',
                'updated_at' => '2021-05-08 05:51:54',
            ),
            2 => 
            array (
                'id' => 5,
                'movie_id' => 15,
                'series_id' => 3,
                'created_at' => '2021-05-08 05:51:54',
                'updated_at' => '2021-05-08 05:51:54',
            ),
            3 => 
            array (
                'id' => 11,
                'movie_id' => 6,
                'series_id' => 3,
                'created_at' => '2021-05-08 06:33:12',
                'updated_at' => '2021-05-08 06:33:12',
            ),
            4 => 
            array (
                'id' => 12,
                'movie_id' => 8,
                'series_id' => 5,
                'created_at' => '2021-05-08 13:54:24',
                'updated_at' => '2021-05-08 13:54:24',
            ),
            5 => 
            array (
                'id' => 13,
                'movie_id' => 24,
                'series_id' => 5,
                'created_at' => '2021-05-08 13:54:24',
                'updated_at' => '2021-05-08 13:54:24',
            ),
            6 => 
            array (
                'id' => 14,
                'movie_id' => 34,
                'series_id' => 5,
                'created_at' => '2021-05-08 13:54:24',
                'updated_at' => '2021-05-08 13:54:24',
            ),
            7 => 
            array (
                'id' => 15,
                'movie_id' => 32,
                'series_id' => 6,
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            8 => 
            array (
                'id' => 16,
                'movie_id' => 31,
                'series_id' => 6,
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            9 => 
            array (
                'id' => 17,
                'movie_id' => 30,
                'series_id' => 6,
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            10 => 
            array (
                'id' => 18,
                'movie_id' => 29,
                'series_id' => 6,
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            11 => 
            array (
                'id' => 19,
                'movie_id' => 28,
                'series_id' => 6,
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            12 => 
            array (
                'id' => 20,
                'movie_id' => 27,
                'series_id' => 6,
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            13 => 
            array (
                'id' => 21,
                'movie_id' => 26,
                'series_id' => 6,
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            14 => 
            array (
                'id' => 22,
                'movie_id' => 25,
                'series_id' => 6,
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            15 => 
            array (
                'id' => 23,
                'movie_id' => 18,
                'series_id' => 7,
                'created_at' => '2021-05-08 14:21:58',
                'updated_at' => '2021-05-08 14:21:58',
            ),
            16 => 
            array (
                'id' => 24,
                'movie_id' => 17,
                'series_id' => 7,
                'created_at' => '2021-05-08 14:21:58',
                'updated_at' => '2021-05-08 14:21:58',
            ),
            17 => 
            array (
                'id' => 25,
                'movie_id' => 16,
                'series_id' => 7,
                'created_at' => '2021-05-08 14:21:58',
                'updated_at' => '2021-05-08 14:21:58',
            ),
            18 => 
            array (
                'id' => 26,
                'movie_id' => 21,
                'series_id' => 8,
                'created_at' => '2021-05-08 14:22:20',
                'updated_at' => '2021-05-08 14:22:20',
            ),
            19 => 
            array (
                'id' => 27,
                'movie_id' => 20,
                'series_id' => 8,
                'created_at' => '2021-05-08 14:22:20',
                'updated_at' => '2021-05-08 14:22:20',
            ),
            20 => 
            array (
                'id' => 28,
                'movie_id' => 19,
                'series_id' => 8,
                'created_at' => '2021-05-08 14:22:20',
                'updated_at' => '2021-05-08 14:22:20',
            ),
            21 => 
            array (
                'id' => 29,
                'movie_id' => 36,
                'series_id' => 9,
                'created_at' => '2021-06-02 13:13:43',
                'updated_at' => '2021-06-02 13:13:43',
            ),
            22 => 
            array (
                'id' => 30,
                'movie_id' => 37,
                'series_id' => 9,
                'created_at' => '2021-06-02 13:19:06',
                'updated_at' => '2021-06-02 13:19:06',
            ),
            23 => 
            array (
                'id' => 31,
                'movie_id' => 38,
                'series_id' => 11,
                'created_at' => '2021-06-02 13:38:46',
                'updated_at' => '2021-06-02 13:38:46',
            ),
            24 => 
            array (
                'id' => 32,
                'movie_id' => 39,
                'series_id' => 11,
                'created_at' => '2021-06-02 13:43:03',
                'updated_at' => '2021-06-02 13:43:03',
            ),
            25 => 
            array (
                'id' => 33,
                'movie_id' => 23,
                'series_id' => 12,
                'created_at' => '2021-06-02 13:56:47',
                'updated_at' => '2021-06-02 13:56:47',
            ),
            26 => 
            array (
                'id' => 34,
                'movie_id' => 41,
                'series_id' => 12,
                'created_at' => '2021-06-02 13:56:47',
                'updated_at' => '2021-06-02 13:56:47',
            ),
            27 => 
            array (
                'id' => 35,
                'movie_id' => 46,
                'series_id' => 13,
                'created_at' => '2021-06-02 15:27:12',
                'updated_at' => '2021-06-02 15:27:12',
            ),
            28 => 
            array (
                'id' => 36,
                'movie_id' => 45,
                'series_id' => 13,
                'created_at' => '2021-06-02 15:27:12',
                'updated_at' => '2021-06-02 15:27:12',
            ),
            29 => 
            array (
                'id' => 37,
                'movie_id' => 47,
                'series_id' => 13,
                'created_at' => '2021-06-02 15:27:12',
                'updated_at' => '2021-06-02 15:27:12',
            ),
        ));
        
        
    }
}