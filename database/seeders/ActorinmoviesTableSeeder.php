<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActorinmoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actorinmovies')->delete();
        
        \DB::table('actorinmovies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 6,
                'actor_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 6,
                'actor_id' => 3,
                'created_at' => '2021-04-21 14:20:21',
                'updated_at' => '2021-04-21 14:20:21',
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 31,
                'actor_id' => 7,
                'created_at' => '2021-05-01 15:03:48',
                'updated_at' => '2021-05-01 15:03:48',
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 31,
                'actor_id' => 6,
                'created_at' => '2021-05-01 15:03:49',
                'updated_at' => '2021-05-01 15:03:49',
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 32,
                'actor_id' => 7,
                'created_at' => '2021-05-01 15:03:58',
                'updated_at' => '2021-05-01 15:03:58',
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 32,
                'actor_id' => 6,
                'created_at' => '2021-05-01 15:03:59',
                'updated_at' => '2021-05-01 15:03:59',
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 28,
                'actor_id' => 7,
                'created_at' => '2021-05-01 15:04:08',
                'updated_at' => '2021-05-01 15:04:08',
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 28,
                'actor_id' => 6,
                'created_at' => '2021-05-01 15:04:09',
                'updated_at' => '2021-05-01 15:04:09',
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 30,
                'actor_id' => 7,
                'created_at' => '2021-05-01 15:04:23',
                'updated_at' => '2021-05-01 15:04:23',
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 30,
                'actor_id' => 6,
                'created_at' => '2021-05-01 15:04:24',
                'updated_at' => '2021-05-01 15:04:24',
            ),
            10 => 
            array (
                'id' => 11,
                'movie_id' => 15,
                'actor_id' => 3,
                'created_at' => '2021-05-01 15:04:45',
                'updated_at' => '2021-05-01 15:04:45',
            ),
            11 => 
            array (
                'id' => 12,
                'movie_id' => 15,
                'actor_id' => 4,
                'created_at' => '2021-05-01 15:04:45',
                'updated_at' => '2021-05-01 15:04:45',
            ),
            12 => 
            array (
                'id' => 13,
                'movie_id' => 15,
                'actor_id' => 2,
                'created_at' => '2021-05-01 15:04:46',
                'updated_at' => '2021-05-01 15:04:46',
            ),
            13 => 
            array (
                'id' => 14,
                'movie_id' => 14,
                'actor_id' => 4,
                'created_at' => '2021-05-01 15:04:54',
                'updated_at' => '2021-05-01 15:04:54',
            ),
            14 => 
            array (
                'id' => 15,
                'movie_id' => 14,
                'actor_id' => 2,
                'created_at' => '2021-05-01 15:04:55',
                'updated_at' => '2021-05-01 15:04:55',
            ),
            15 => 
            array (
                'id' => 16,
                'movie_id' => 14,
                'actor_id' => 3,
                'created_at' => '2021-05-01 15:04:59',
                'updated_at' => '2021-05-01 15:04:59',
            ),
            16 => 
            array (
                'id' => 17,
                'movie_id' => 13,
                'actor_id' => 3,
                'created_at' => '2021-05-01 15:05:10',
                'updated_at' => '2021-05-01 15:05:10',
            ),
            17 => 
            array (
                'id' => 18,
                'movie_id' => 13,
                'actor_id' => 5,
                'created_at' => '2021-05-01 15:05:11',
                'updated_at' => '2021-05-01 15:05:11',
            ),
            18 => 
            array (
                'id' => 19,
                'movie_id' => 13,
                'actor_id' => 4,
                'created_at' => '2021-05-01 15:05:12',
                'updated_at' => '2021-05-01 15:05:12',
            ),
            19 => 
            array (
                'id' => 20,
                'movie_id' => 13,
                'actor_id' => 2,
                'created_at' => '2021-05-01 15:05:12',
                'updated_at' => '2021-05-01 15:05:12',
            ),
            20 => 
            array (
                'id' => 21,
                'movie_id' => 6,
                'actor_id' => 5,
                'created_at' => '2021-05-01 15:05:22',
                'updated_at' => '2021-05-01 15:05:22',
            ),
            21 => 
            array (
                'id' => 22,
                'movie_id' => 6,
                'actor_id' => 4,
                'created_at' => '2021-05-01 15:05:24',
                'updated_at' => '2021-05-01 15:05:24',
            ),
            22 => 
            array (
                'id' => 23,
                'movie_id' => 27,
                'actor_id' => 7,
                'created_at' => '2021-05-08 02:12:09',
                'updated_at' => '2021-05-08 02:12:09',
            ),
            23 => 
            array (
                'id' => 24,
                'movie_id' => 27,
                'actor_id' => 6,
                'created_at' => '2021-05-08 02:12:15',
                'updated_at' => '2021-05-08 02:12:15',
            ),
            24 => 
            array (
                'id' => 25,
                'movie_id' => 24,
                'actor_id' => 10,
                'created_at' => '2021-05-21 02:40:01',
                'updated_at' => '2021-05-21 02:40:01',
            ),
            25 => 
            array (
                'id' => 26,
                'movie_id' => 24,
                'actor_id' => 8,
                'created_at' => '2021-05-21 02:40:02',
                'updated_at' => '2021-05-21 02:40:02',
            ),
            26 => 
            array (
                'id' => 27,
                'movie_id' => 24,
                'actor_id' => 9,
                'created_at' => '2021-05-21 02:40:02',
                'updated_at' => '2021-05-21 02:40:02',
            ),
            27 => 
            array (
                'id' => 28,
                'movie_id' => 34,
                'actor_id' => 10,
                'created_at' => '2021-05-21 02:40:12',
                'updated_at' => '2021-05-21 02:40:12',
            ),
            28 => 
            array (
                'id' => 29,
                'movie_id' => 34,
                'actor_id' => 8,
                'created_at' => '2021-05-21 02:40:13',
                'updated_at' => '2021-05-21 02:40:13',
            ),
            29 => 
            array (
                'id' => 30,
                'movie_id' => 34,
                'actor_id' => 9,
                'created_at' => '2021-05-21 02:40:13',
                'updated_at' => '2021-05-21 02:40:13',
            ),
            30 => 
            array (
                'id' => 31,
                'movie_id' => 8,
                'actor_id' => 10,
                'created_at' => '2021-05-21 02:40:31',
                'updated_at' => '2021-05-21 02:40:31',
            ),
            31 => 
            array (
                'id' => 32,
                'movie_id' => 8,
                'actor_id' => 8,
                'created_at' => '2021-05-21 02:40:31',
                'updated_at' => '2021-05-21 02:40:31',
            ),
            32 => 
            array (
                'id' => 33,
                'movie_id' => 8,
                'actor_id' => 9,
                'created_at' => '2021-05-21 02:40:32',
                'updated_at' => '2021-05-21 02:40:32',
            ),
            33 => 
            array (
                'id' => 34,
                'movie_id' => 16,
                'actor_id' => 11,
                'created_at' => '2021-05-21 02:47:04',
                'updated_at' => '2021-05-21 02:47:04',
            ),
            34 => 
            array (
                'id' => 35,
                'movie_id' => 16,
                'actor_id' => 12,
                'created_at' => '2021-05-21 02:47:04',
                'updated_at' => '2021-05-21 02:47:04',
            ),
            35 => 
            array (
                'id' => 36,
                'movie_id' => 17,
                'actor_id' => 11,
                'created_at' => '2021-05-21 02:47:20',
                'updated_at' => '2021-05-21 02:47:20',
            ),
            36 => 
            array (
                'id' => 37,
                'movie_id' => 17,
                'actor_id' => 12,
                'created_at' => '2021-05-21 02:47:21',
                'updated_at' => '2021-05-21 02:47:21',
            ),
            37 => 
            array (
                'id' => 38,
                'movie_id' => 18,
                'actor_id' => 11,
                'created_at' => '2021-05-21 02:47:30',
                'updated_at' => '2021-05-21 02:47:30',
            ),
            38 => 
            array (
                'id' => 39,
                'movie_id' => 18,
                'actor_id' => 12,
                'created_at' => '2021-05-21 02:47:31',
                'updated_at' => '2021-05-21 02:47:31',
            ),
            39 => 
            array (
                'id' => 40,
                'movie_id' => 19,
                'actor_id' => 11,
                'created_at' => '2021-05-21 02:47:53',
                'updated_at' => '2021-05-21 02:47:53',
            ),
            40 => 
            array (
                'id' => 41,
                'movie_id' => 19,
                'actor_id' => 12,
                'created_at' => '2021-05-21 02:47:54',
                'updated_at' => '2021-05-21 02:47:54',
            ),
            41 => 
            array (
                'id' => 42,
                'movie_id' => 21,
                'actor_id' => 11,
                'created_at' => '2021-05-21 02:48:03',
                'updated_at' => '2021-05-21 02:48:03',
            ),
            42 => 
            array (
                'id' => 43,
                'movie_id' => 21,
                'actor_id' => 12,
                'created_at' => '2021-05-21 02:48:04',
                'updated_at' => '2021-05-21 02:48:04',
            ),
            43 => 
            array (
                'id' => 44,
                'movie_id' => 20,
                'actor_id' => 11,
                'created_at' => '2021-05-21 02:48:14',
                'updated_at' => '2021-05-21 02:48:14',
            ),
            44 => 
            array (
                'id' => 45,
                'movie_id' => 20,
                'actor_id' => 12,
                'created_at' => '2021-05-21 02:48:15',
                'updated_at' => '2021-05-21 02:48:15',
            ),
            45 => 
            array (
                'id' => 46,
                'movie_id' => 22,
                'actor_id' => 13,
                'created_at' => '2021-05-21 02:51:03',
                'updated_at' => '2021-05-21 02:51:03',
            ),
            46 => 
            array (
                'id' => 47,
                'movie_id' => 10,
                'actor_id' => 15,
                'created_at' => '2021-05-21 02:56:43',
                'updated_at' => '2021-05-21 02:56:43',
            ),
            47 => 
            array (
                'id' => 48,
                'movie_id' => 10,
                'actor_id' => 14,
                'created_at' => '2021-05-21 02:56:44',
                'updated_at' => '2021-05-21 02:56:44',
            ),
            48 => 
            array (
                'id' => 49,
                'movie_id' => 35,
                'actor_id' => 13,
                'created_at' => '2021-05-21 02:57:31',
                'updated_at' => '2021-05-21 02:57:31',
            ),
            49 => 
            array (
                'id' => 50,
                'movie_id' => 35,
                'actor_id' => 16,
                'created_at' => '2021-05-21 03:00:33',
                'updated_at' => '2021-05-21 03:00:33',
            ),
            50 => 
            array (
                'id' => 51,
                'movie_id' => 23,
                'actor_id' => 17,
                'created_at' => '2021-05-21 03:03:00',
                'updated_at' => '2021-05-21 03:03:00',
            ),
            51 => 
            array (
                'id' => 52,
                'movie_id' => 41,
                'actor_id' => 17,
                'created_at' => '2021-06-02 14:21:24',
                'updated_at' => '2021-06-02 14:21:24',
            ),
            52 => 
            array (
                'id' => 53,
                'movie_id' => 46,
                'actor_id' => 2,
                'created_at' => '2021-06-02 15:28:39',
                'updated_at' => '2021-06-02 15:28:39',
            ),
            53 => 
            array (
                'id' => 54,
                'movie_id' => 46,
                'actor_id' => 5,
                'created_at' => '2021-06-02 15:28:47',
                'updated_at' => '2021-06-02 15:28:47',
            ),
            54 => 
            array (
                'id' => 55,
                'movie_id' => 47,
                'actor_id' => 2,
                'created_at' => '2021-06-02 15:29:03',
                'updated_at' => '2021-06-02 15:29:03',
            ),
            55 => 
            array (
                'id' => 56,
                'movie_id' => 47,
                'actor_id' => 5,
                'created_at' => '2021-06-02 15:29:15',
                'updated_at' => '2021-06-02 15:29:15',
            ),
            56 => 
            array (
                'id' => 57,
                'movie_id' => 47,
                'actor_id' => 3,
                'created_at' => '2021-06-02 15:29:16',
                'updated_at' => '2021-06-02 15:29:16',
            ),
            57 => 
            array (
                'id' => 58,
                'movie_id' => 45,
                'actor_id' => 2,
                'created_at' => '2021-06-02 15:29:28',
                'updated_at' => '2021-06-02 15:29:28',
            ),
            58 => 
            array (
                'id' => 59,
                'movie_id' => 45,
                'actor_id' => 5,
                'created_at' => '2021-06-02 15:29:33',
                'updated_at' => '2021-06-02 15:29:33',
            ),
            59 => 
            array (
                'id' => 60,
                'movie_id' => 36,
                'actor_id' => 18,
                'created_at' => '2021-06-02 15:32:17',
                'updated_at' => '2021-06-02 15:32:17',
            ),
            60 => 
            array (
                'id' => 61,
                'movie_id' => 37,
                'actor_id' => 18,
                'created_at' => '2021-06-02 15:32:27',
                'updated_at' => '2021-06-02 15:32:27',
            ),
            61 => 
            array (
                'id' => 62,
                'movie_id' => 40,
                'actor_id' => 19,
                'created_at' => '2021-06-02 15:35:06',
                'updated_at' => '2021-06-02 15:35:06',
            ),
        ));
        
        
    }
}