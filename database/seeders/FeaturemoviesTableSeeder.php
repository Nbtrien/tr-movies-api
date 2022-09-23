<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeaturemoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('featuremovies')->delete();
        
        \DB::table('featuremovies')->insert(array (
            0 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'movie_id' => 6,
                'video_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'movie_id' => 13,
                'video_id' => 6,
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-04-21 14:58:44',
            ),
            2 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'movie_id' => 14,
                'video_id' => 7,
                'created_at' => '2021-04-21 15:09:51',
                'updated_at' => '2021-04-21 15:09:51',
            ),
            3 => 
            array (
                'id' => 5,
                'category_id' => 1,
                'movie_id' => 15,
                'video_id' => 8,
                'created_at' => '2021-04-21 15:22:10',
                'updated_at' => '2021-04-21 15:22:10',
            ),
            4 => 
            array (
                'id' => 6,
                'category_id' => 1,
                'movie_id' => 16,
                'video_id' => 9,
                'created_at' => '2021-04-21 15:34:47',
                'updated_at' => '2021-04-21 15:34:47',
            ),
            5 => 
            array (
                'id' => 7,
                'category_id' => 1,
                'movie_id' => 17,
                'video_id' => 10,
                'created_at' => '2021-04-21 15:38:00',
                'updated_at' => '2021-04-21 15:38:00',
            ),
            6 => 
            array (
                'id' => 8,
                'category_id' => 1,
                'movie_id' => 18,
                'video_id' => 11,
                'created_at' => '2021-04-21 15:56:13',
                'updated_at' => '2021-04-21 15:56:13',
            ),
            7 => 
            array (
                'id' => 9,
                'category_id' => 1,
                'movie_id' => 19,
                'video_id' => 12,
                'created_at' => '2021-04-21 16:06:25',
                'updated_at' => '2021-04-21 16:06:25',
            ),
            8 => 
            array (
                'id' => 10,
                'category_id' => 1,
                'movie_id' => 20,
                'video_id' => 13,
                'created_at' => '2021-04-21 16:13:03',
                'updated_at' => '2021-04-21 16:13:03',
            ),
            9 => 
            array (
                'id' => 11,
                'category_id' => 1,
                'movie_id' => 21,
                'video_id' => 14,
                'created_at' => '2021-04-21 17:05:29',
                'updated_at' => '2021-04-21 17:05:29',
            ),
            10 => 
            array (
                'id' => 12,
                'category_id' => 1,
                'movie_id' => 25,
                'video_id' => 24,
                'created_at' => '2021-05-01 13:38:40',
                'updated_at' => '2021-05-01 13:38:40',
            ),
            11 => 
            array (
                'id' => 13,
                'category_id' => 1,
                'movie_id' => 26,
                'video_id' => 25,
                'created_at' => '2021-05-01 13:47:12',
                'updated_at' => '2021-05-01 13:47:12',
            ),
            12 => 
            array (
                'id' => 14,
                'category_id' => 1,
                'movie_id' => 27,
                'video_id' => 26,
                'created_at' => '2021-05-01 13:53:29',
                'updated_at' => '2021-05-01 13:53:29',
            ),
            13 => 
            array (
                'id' => 15,
                'category_id' => 1,
                'movie_id' => 28,
                'video_id' => 27,
                'created_at' => '2021-05-01 14:00:54',
                'updated_at' => '2021-05-01 14:00:54',
            ),
            14 => 
            array (
                'id' => 16,
                'category_id' => 1,
                'movie_id' => 29,
                'video_id' => 28,
                'created_at' => '2021-05-01 14:05:38',
                'updated_at' => '2021-05-01 14:05:38',
            ),
            15 => 
            array (
                'id' => 17,
                'category_id' => 1,
                'movie_id' => 30,
                'video_id' => 29,
                'created_at' => '2021-05-01 14:10:46',
                'updated_at' => '2021-05-01 14:10:46',
            ),
            16 => 
            array (
                'id' => 18,
                'category_id' => 1,
                'movie_id' => 31,
                'video_id' => 30,
                'created_at' => '2021-05-01 14:15:09',
                'updated_at' => '2021-05-01 14:15:09',
            ),
            17 => 
            array (
                'id' => 19,
                'category_id' => 1,
                'movie_id' => 32,
                'video_id' => 31,
                'created_at' => '2021-05-01 14:21:25',
                'updated_at' => '2021-05-01 14:21:25',
            ),
            18 => 
            array (
                'id' => 20,
                'category_id' => 1,
                'movie_id' => 35,
                'video_id' => 71,
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            19 => 
            array (
                'id' => 21,
                'category_id' => 1,
                'movie_id' => 36,
                'video_id' => 72,
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            20 => 
            array (
                'id' => 22,
                'category_id' => 1,
                'movie_id' => 37,
                'video_id' => 75,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            21 => 
            array (
                'id' => 23,
                'category_id' => 1,
                'movie_id' => 38,
                'video_id' => 76,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            22 => 
            array (
                'id' => 24,
                'category_id' => 1,
                'movie_id' => 39,
                'video_id' => 77,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            23 => 
            array (
                'id' => 25,
                'category_id' => 1,
                'movie_id' => 40,
                'video_id' => 78,
                'created_at' => '2021-06-02 13:50:08',
                'updated_at' => '2021-06-02 13:50:08',
            ),
            24 => 
            array (
                'id' => 26,
                'category_id' => 1,
                'movie_id' => 45,
                'video_id' => 102,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            25 => 
            array (
                'id' => 27,
                'category_id' => 1,
                'movie_id' => 46,
                'video_id' => 103,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            26 => 
            array (
                'id' => 28,
                'category_id' => 1,
                'movie_id' => 47,
                'video_id' => 104,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
        ));
        
        
    }
}