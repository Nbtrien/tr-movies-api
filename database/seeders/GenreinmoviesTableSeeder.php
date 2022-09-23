<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenreinmoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genreinmovies')->delete();
        
        \DB::table('genreinmovies')->insert(array (
            0 => 
            array (
                'id' => 8,
                'movie_id' => 6,
                'genre_id' => 2,
                'created_at' => '2021-04-20 16:08:20',
                'updated_at' => '2021-04-20 16:08:20',
            ),
            1 => 
            array (
                'id' => 9,
                'movie_id' => 6,
                'genre_id' => 3,
                'created_at' => '2021-04-20 16:08:20',
                'updated_at' => '2021-04-20 16:08:20',
            ),
            2 => 
            array (
                'id' => 10,
                'movie_id' => 6,
                'genre_id' => 7,
                'created_at' => '2021-04-20 16:08:20',
                'updated_at' => '2021-04-20 16:08:20',
            ),
            3 => 
            array (
                'id' => 13,
                'movie_id' => 8,
                'genre_id' => 2,
                'created_at' => '2021-04-20 17:26:57',
                'updated_at' => '2021-04-20 17:26:57',
            ),
            4 => 
            array (
                'id' => 14,
                'movie_id' => 8,
                'genre_id' => 7,
                'created_at' => '2021-04-20 17:26:57',
                'updated_at' => '2021-04-20 17:26:57',
            ),
            5 => 
            array (
                'id' => 15,
                'movie_id' => 9,
                'genre_id' => 2,
                'created_at' => '2021-04-20 17:32:18',
                'updated_at' => '2021-04-20 17:32:18',
            ),
            6 => 
            array (
                'id' => 17,
                'movie_id' => 9,
                'genre_id' => 4,
                'created_at' => '2021-04-20 17:32:18',
                'updated_at' => '2021-04-20 17:32:18',
            ),
            7 => 
            array (
                'id' => 18,
                'movie_id' => 9,
                'genre_id' => 7,
                'created_at' => '2021-04-20 17:32:18',
                'updated_at' => '2021-04-20 17:32:18',
            ),
            8 => 
            array (
                'id' => 19,
                'movie_id' => 9,
                'genre_id' => 3,
                'created_at' => '2021-04-21 13:07:23',
                'updated_at' => '2021-04-21 13:07:23',
            ),
            9 => 
            array (
                'id' => 22,
                'movie_id' => 9,
                'genre_id' => 13,
                'created_at' => '2021-04-21 13:07:35',
                'updated_at' => '2021-04-21 13:07:35',
            ),
            10 => 
            array (
                'id' => 24,
                'movie_id' => 9,
                'genre_id' => 17,
                'created_at' => '2021-04-21 13:37:24',
                'updated_at' => '2021-04-21 13:37:24',
            ),
            11 => 
            array (
                'id' => 25,
                'movie_id' => 9,
                'genre_id' => 15,
                'created_at' => '2021-04-21 13:39:49',
                'updated_at' => '2021-04-21 13:39:49',
            ),
            12 => 
            array (
                'id' => 26,
                'movie_id' => 10,
                'genre_id' => 3,
                'created_at' => '2021-04-21 14:33:48',
                'updated_at' => '2021-04-21 14:33:48',
            ),
            13 => 
            array (
                'id' => 27,
                'movie_id' => 10,
                'genre_id' => 4,
                'created_at' => '2021-04-21 14:33:48',
                'updated_at' => '2021-04-21 14:33:48',
            ),
            14 => 
            array (
                'id' => 28,
                'movie_id' => 10,
                'genre_id' => 7,
                'created_at' => '2021-04-21 14:33:48',
                'updated_at' => '2021-04-21 14:33:48',
            ),
            15 => 
            array (
                'id' => 29,
                'movie_id' => 10,
                'genre_id' => 12,
                'created_at' => '2021-04-21 14:33:48',
                'updated_at' => '2021-04-21 14:33:48',
            ),
            16 => 
            array (
                'id' => 30,
                'movie_id' => 10,
                'genre_id' => 14,
                'created_at' => '2021-04-21 14:33:48',
                'updated_at' => '2021-04-21 14:33:48',
            ),
            17 => 
            array (
                'id' => 31,
                'movie_id' => 11,
                'genre_id' => 2,
                'created_at' => '2021-04-21 14:46:37',
                'updated_at' => '2021-04-21 14:46:37',
            ),
            18 => 
            array (
                'id' => 32,
                'movie_id' => 11,
                'genre_id' => 7,
                'created_at' => '2021-04-21 14:46:37',
                'updated_at' => '2021-04-21 14:46:37',
            ),
            19 => 
            array (
                'id' => 33,
                'movie_id' => 11,
                'genre_id' => 12,
                'created_at' => '2021-04-21 14:46:37',
                'updated_at' => '2021-04-21 14:46:37',
            ),
            20 => 
            array (
                'id' => 34,
                'movie_id' => 11,
                'genre_id' => 14,
                'created_at' => '2021-04-21 14:46:37',
                'updated_at' => '2021-04-21 14:46:37',
            ),
            21 => 
            array (
                'id' => 35,
                'movie_id' => 12,
                'genre_id' => 2,
                'created_at' => '2021-04-21 14:51:12',
                'updated_at' => '2021-04-21 14:51:12',
            ),
            22 => 
            array (
                'id' => 36,
                'movie_id' => 12,
                'genre_id' => 7,
                'created_at' => '2021-04-21 14:51:12',
                'updated_at' => '2021-04-21 14:51:12',
            ),
            23 => 
            array (
                'id' => 37,
                'movie_id' => 12,
                'genre_id' => 12,
                'created_at' => '2021-04-21 14:51:12',
                'updated_at' => '2021-04-21 14:51:12',
            ),
            24 => 
            array (
                'id' => 38,
                'movie_id' => 12,
                'genre_id' => 14,
                'created_at' => '2021-04-21 14:51:12',
                'updated_at' => '2021-04-21 14:51:12',
            ),
            25 => 
            array (
                'id' => 39,
                'movie_id' => 13,
                'genre_id' => 2,
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-04-21 14:58:44',
            ),
            26 => 
            array (
                'id' => 40,
                'movie_id' => 13,
                'genre_id' => 7,
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-04-21 14:58:44',
            ),
            27 => 
            array (
                'id' => 41,
                'movie_id' => 13,
                'genre_id' => 10,
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-04-21 14:58:44',
            ),
            28 => 
            array (
                'id' => 42,
                'movie_id' => 13,
                'genre_id' => 13,
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-04-21 14:58:44',
            ),
            29 => 
            array (
                'id' => 43,
                'movie_id' => 13,
                'genre_id' => 14,
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-04-21 14:58:44',
            ),
            30 => 
            array (
                'id' => 44,
                'movie_id' => 13,
                'genre_id' => 15,
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-04-21 14:58:44',
            ),
            31 => 
            array (
                'id' => 45,
                'movie_id' => 14,
                'genre_id' => 2,
                'created_at' => '2021-04-21 15:09:51',
                'updated_at' => '2021-04-21 15:09:51',
            ),
            32 => 
            array (
                'id' => 46,
                'movie_id' => 14,
                'genre_id' => 7,
                'created_at' => '2021-04-21 15:09:51',
                'updated_at' => '2021-04-21 15:09:51',
            ),
            33 => 
            array (
                'id' => 47,
                'movie_id' => 14,
                'genre_id' => 10,
                'created_at' => '2021-04-21 15:09:51',
                'updated_at' => '2021-04-21 15:09:51',
            ),
            34 => 
            array (
                'id' => 48,
                'movie_id' => 14,
                'genre_id' => 13,
                'created_at' => '2021-04-21 15:09:51',
                'updated_at' => '2021-04-21 15:09:51',
            ),
            35 => 
            array (
                'id' => 49,
                'movie_id' => 14,
                'genre_id' => 15,
                'created_at' => '2021-04-21 15:09:51',
                'updated_at' => '2021-04-21 15:09:51',
            ),
            36 => 
            array (
                'id' => 50,
                'movie_id' => 15,
                'genre_id' => 2,
                'created_at' => '2021-04-21 15:22:10',
                'updated_at' => '2021-04-21 15:22:10',
            ),
            37 => 
            array (
                'id' => 51,
                'movie_id' => 15,
                'genre_id' => 7,
                'created_at' => '2021-04-21 15:22:10',
                'updated_at' => '2021-04-21 15:22:10',
            ),
            38 => 
            array (
                'id' => 52,
                'movie_id' => 15,
                'genre_id' => 10,
                'created_at' => '2021-04-21 15:22:10',
                'updated_at' => '2021-04-21 15:22:10',
            ),
            39 => 
            array (
                'id' => 53,
                'movie_id' => 15,
                'genre_id' => 13,
                'created_at' => '2021-04-21 15:22:10',
                'updated_at' => '2021-04-21 15:22:10',
            ),
            40 => 
            array (
                'id' => 54,
                'movie_id' => 15,
                'genre_id' => 15,
                'created_at' => '2021-04-21 15:22:10',
                'updated_at' => '2021-04-21 15:22:10',
            ),
            41 => 
            array (
                'id' => 55,
                'movie_id' => 16,
                'genre_id' => 2,
                'created_at' => '2021-04-21 15:34:47',
                'updated_at' => '2021-04-21 15:34:47',
            ),
            42 => 
            array (
                'id' => 56,
                'movie_id' => 16,
                'genre_id' => 10,
                'created_at' => '2021-04-21 15:34:47',
                'updated_at' => '2021-04-21 15:34:47',
            ),
            43 => 
            array (
                'id' => 57,
                'movie_id' => 16,
                'genre_id' => 13,
                'created_at' => '2021-04-21 15:34:47',
                'updated_at' => '2021-04-21 15:34:47',
            ),
            44 => 
            array (
                'id' => 58,
                'movie_id' => 16,
                'genre_id' => 15,
                'created_at' => '2021-04-21 15:34:47',
                'updated_at' => '2021-04-21 15:34:47',
            ),
            45 => 
            array (
                'id' => 59,
                'movie_id' => 17,
                'genre_id' => 2,
                'created_at' => '2021-04-21 15:38:00',
                'updated_at' => '2021-04-21 15:38:00',
            ),
            46 => 
            array (
                'id' => 60,
                'movie_id' => 17,
                'genre_id' => 10,
                'created_at' => '2021-04-21 15:38:00',
                'updated_at' => '2021-04-21 15:38:00',
            ),
            47 => 
            array (
                'id' => 61,
                'movie_id' => 17,
                'genre_id' => 13,
                'created_at' => '2021-04-21 15:38:00',
                'updated_at' => '2021-04-21 15:38:00',
            ),
            48 => 
            array (
                'id' => 62,
                'movie_id' => 17,
                'genre_id' => 14,
                'created_at' => '2021-04-21 15:38:00',
                'updated_at' => '2021-04-21 15:38:00',
            ),
            49 => 
            array (
                'id' => 63,
                'movie_id' => 17,
                'genre_id' => 15,
                'created_at' => '2021-04-21 15:38:00',
                'updated_at' => '2021-04-21 15:38:00',
            ),
            50 => 
            array (
                'id' => 64,
                'movie_id' => 18,
                'genre_id' => 2,
                'created_at' => '2021-04-21 15:56:13',
                'updated_at' => '2021-04-21 15:56:13',
            ),
            51 => 
            array (
                'id' => 65,
                'movie_id' => 18,
                'genre_id' => 7,
                'created_at' => '2021-04-21 15:56:13',
                'updated_at' => '2021-04-21 15:56:13',
            ),
            52 => 
            array (
                'id' => 66,
                'movie_id' => 18,
                'genre_id' => 10,
                'created_at' => '2021-04-21 15:56:13',
                'updated_at' => '2021-04-21 15:56:13',
            ),
            53 => 
            array (
                'id' => 67,
                'movie_id' => 18,
                'genre_id' => 13,
                'created_at' => '2021-04-21 15:56:13',
                'updated_at' => '2021-04-21 15:56:13',
            ),
            54 => 
            array (
                'id' => 68,
                'movie_id' => 18,
                'genre_id' => 15,
                'created_at' => '2021-04-21 15:56:13',
                'updated_at' => '2021-04-21 15:56:13',
            ),
            55 => 
            array (
                'id' => 69,
                'movie_id' => 19,
                'genre_id' => 2,
                'created_at' => '2021-04-21 16:06:25',
                'updated_at' => '2021-04-21 16:06:25',
            ),
            56 => 
            array (
                'id' => 70,
                'movie_id' => 19,
                'genre_id' => 7,
                'created_at' => '2021-04-21 16:06:25',
                'updated_at' => '2021-04-21 16:06:25',
            ),
            57 => 
            array (
                'id' => 71,
                'movie_id' => 19,
                'genre_id' => 10,
                'created_at' => '2021-04-21 16:06:25',
                'updated_at' => '2021-04-21 16:06:25',
            ),
            58 => 
            array (
                'id' => 72,
                'movie_id' => 19,
                'genre_id' => 13,
                'created_at' => '2021-04-21 16:06:25',
                'updated_at' => '2021-04-21 16:06:25',
            ),
            59 => 
            array (
                'id' => 73,
                'movie_id' => 19,
                'genre_id' => 15,
                'created_at' => '2021-04-21 16:06:25',
                'updated_at' => '2021-04-21 16:06:25',
            ),
            60 => 
            array (
                'id' => 74,
                'movie_id' => 20,
                'genre_id' => 2,
                'created_at' => '2021-04-21 16:13:03',
                'updated_at' => '2021-04-21 16:13:03',
            ),
            61 => 
            array (
                'id' => 75,
                'movie_id' => 20,
                'genre_id' => 10,
                'created_at' => '2021-04-21 16:13:03',
                'updated_at' => '2021-04-21 16:13:03',
            ),
            62 => 
            array (
                'id' => 76,
                'movie_id' => 20,
                'genre_id' => 13,
                'created_at' => '2021-04-21 16:13:03',
                'updated_at' => '2021-04-21 16:13:03',
            ),
            63 => 
            array (
                'id' => 77,
                'movie_id' => 20,
                'genre_id' => 15,
                'created_at' => '2021-04-21 16:13:03',
                'updated_at' => '2021-04-21 16:13:03',
            ),
            64 => 
            array (
                'id' => 78,
                'movie_id' => 21,
                'genre_id' => 2,
                'created_at' => '2021-04-21 17:05:29',
                'updated_at' => '2021-04-21 17:05:29',
            ),
            65 => 
            array (
                'id' => 79,
                'movie_id' => 21,
                'genre_id' => 7,
                'created_at' => '2021-04-21 17:05:29',
                'updated_at' => '2021-04-21 17:05:29',
            ),
            66 => 
            array (
                'id' => 80,
                'movie_id' => 21,
                'genre_id' => 10,
                'created_at' => '2021-04-21 17:05:29',
                'updated_at' => '2021-04-21 17:05:29',
            ),
            67 => 
            array (
                'id' => 81,
                'movie_id' => 21,
                'genre_id' => 13,
                'created_at' => '2021-04-21 17:05:29',
                'updated_at' => '2021-04-21 17:05:29',
            ),
            68 => 
            array (
                'id' => 82,
                'movie_id' => 21,
                'genre_id' => 15,
                'created_at' => '2021-04-21 17:05:29',
                'updated_at' => '2021-04-21 17:05:29',
            ),
            69 => 
            array (
                'id' => 83,
                'movie_id' => 22,
                'genre_id' => 2,
                'created_at' => '2021-04-26 02:57:57',
                'updated_at' => '2021-04-26 02:57:57',
            ),
            70 => 
            array (
                'id' => 84,
                'movie_id' => 22,
                'genre_id' => 7,
                'created_at' => '2021-04-26 02:57:57',
                'updated_at' => '2021-04-26 02:57:57',
            ),
            71 => 
            array (
                'id' => 85,
                'movie_id' => 22,
                'genre_id' => 12,
                'created_at' => '2021-04-26 02:57:57',
                'updated_at' => '2021-04-26 02:57:57',
            ),
            72 => 
            array (
                'id' => 86,
                'movie_id' => 22,
                'genre_id' => 15,
                'created_at' => '2021-04-26 02:57:57',
                'updated_at' => '2021-04-26 02:57:57',
            ),
            73 => 
            array (
                'id' => 87,
                'movie_id' => 23,
                'genre_id' => 3,
                'created_at' => '2021-04-26 15:42:45',
                'updated_at' => '2021-04-26 15:42:45',
            ),
            74 => 
            array (
                'id' => 88,
                'movie_id' => 23,
                'genre_id' => 7,
                'created_at' => '2021-04-26 15:42:45',
                'updated_at' => '2021-04-26 15:42:45',
            ),
            75 => 
            array (
                'id' => 89,
                'movie_id' => 23,
                'genre_id' => 12,
                'created_at' => '2021-04-26 15:42:45',
                'updated_at' => '2021-04-26 15:42:45',
            ),
            76 => 
            array (
                'id' => 90,
                'movie_id' => 23,
                'genre_id' => 15,
                'created_at' => '2021-04-26 15:42:45',
                'updated_at' => '2021-04-26 15:42:45',
            ),
            77 => 
            array (
                'id' => 91,
                'movie_id' => 23,
                'genre_id' => 17,
                'created_at' => '2021-04-26 15:42:45',
                'updated_at' => '2021-04-26 15:42:45',
            ),
            78 => 
            array (
                'id' => 92,
                'movie_id' => 24,
                'genre_id' => 2,
                'created_at' => '2021-04-29 15:22:51',
                'updated_at' => '2021-04-29 15:22:51',
            ),
            79 => 
            array (
                'id' => 93,
                'movie_id' => 24,
                'genre_id' => 7,
                'created_at' => '2021-04-29 15:22:51',
                'updated_at' => '2021-04-29 15:22:51',
            ),
            80 => 
            array (
                'id' => 94,
                'movie_id' => 24,
                'genre_id' => 12,
                'created_at' => '2021-04-29 15:22:51',
                'updated_at' => '2021-04-29 15:22:51',
            ),
            81 => 
            array (
                'id' => 95,
                'movie_id' => 24,
                'genre_id' => 14,
                'created_at' => '2021-04-29 15:22:51',
                'updated_at' => '2021-04-29 15:22:51',
            ),
            82 => 
            array (
                'id' => 96,
                'movie_id' => 25,
                'genre_id' => 7,
                'created_at' => '2021-05-01 13:38:40',
                'updated_at' => '2021-05-01 13:38:40',
            ),
            83 => 
            array (
                'id' => 97,
                'movie_id' => 25,
                'genre_id' => 10,
                'created_at' => '2021-05-01 13:38:40',
                'updated_at' => '2021-05-01 13:38:40',
            ),
            84 => 
            array (
                'id' => 98,
                'movie_id' => 25,
                'genre_id' => 15,
                'created_at' => '2021-05-01 13:38:40',
                'updated_at' => '2021-05-01 13:38:40',
            ),
            85 => 
            array (
                'id' => 99,
                'movie_id' => 26,
                'genre_id' => 10,
                'created_at' => '2021-05-01 13:47:12',
                'updated_at' => '2021-05-01 13:47:12',
            ),
            86 => 
            array (
                'id' => 100,
                'movie_id' => 26,
                'genre_id' => 15,
                'created_at' => '2021-05-01 13:47:12',
                'updated_at' => '2021-05-01 13:47:12',
            ),
            87 => 
            array (
                'id' => 101,
                'movie_id' => 27,
                'genre_id' => 7,
                'created_at' => '2021-05-01 13:53:29',
                'updated_at' => '2021-05-01 13:53:29',
            ),
            88 => 
            array (
                'id' => 102,
                'movie_id' => 27,
                'genre_id' => 10,
                'created_at' => '2021-05-01 13:53:29',
                'updated_at' => '2021-05-01 13:53:29',
            ),
            89 => 
            array (
                'id' => 103,
                'movie_id' => 27,
                'genre_id' => 15,
                'created_at' => '2021-05-01 13:53:29',
                'updated_at' => '2021-05-01 13:53:29',
            ),
            90 => 
            array (
                'id' => 104,
                'movie_id' => 28,
                'genre_id' => 7,
                'created_at' => '2021-05-01 14:00:54',
                'updated_at' => '2021-05-01 14:00:54',
            ),
            91 => 
            array (
                'id' => 105,
                'movie_id' => 28,
                'genre_id' => 10,
                'created_at' => '2021-05-01 14:00:54',
                'updated_at' => '2021-05-01 14:00:54',
            ),
            92 => 
            array (
                'id' => 106,
                'movie_id' => 28,
                'genre_id' => 15,
                'created_at' => '2021-05-01 14:00:54',
                'updated_at' => '2021-05-01 14:00:54',
            ),
            93 => 
            array (
                'id' => 107,
                'movie_id' => 29,
                'genre_id' => 7,
                'created_at' => '2021-05-01 14:05:38',
                'updated_at' => '2021-05-01 14:05:38',
            ),
            94 => 
            array (
                'id' => 108,
                'movie_id' => 29,
                'genre_id' => 10,
                'created_at' => '2021-05-01 14:05:38',
                'updated_at' => '2021-05-01 14:05:38',
            ),
            95 => 
            array (
                'id' => 109,
                'movie_id' => 29,
                'genre_id' => 15,
                'created_at' => '2021-05-01 14:05:38',
                'updated_at' => '2021-05-01 14:05:38',
            ),
            96 => 
            array (
                'id' => 110,
                'movie_id' => 30,
                'genre_id' => 10,
                'created_at' => '2021-05-01 14:10:46',
                'updated_at' => '2021-05-01 14:10:46',
            ),
            97 => 
            array (
                'id' => 111,
                'movie_id' => 30,
                'genre_id' => 15,
                'created_at' => '2021-05-01 14:10:46',
                'updated_at' => '2021-05-01 14:10:46',
            ),
            98 => 
            array (
                'id' => 112,
                'movie_id' => 31,
                'genre_id' => 7,
                'created_at' => '2021-05-01 14:15:09',
                'updated_at' => '2021-05-01 14:15:09',
            ),
            99 => 
            array (
                'id' => 113,
                'movie_id' => 31,
                'genre_id' => 10,
                'created_at' => '2021-05-01 14:15:09',
                'updated_at' => '2021-05-01 14:15:09',
            ),
            100 => 
            array (
                'id' => 114,
                'movie_id' => 31,
                'genre_id' => 15,
                'created_at' => '2021-05-01 14:15:09',
                'updated_at' => '2021-05-01 14:15:09',
            ),
            101 => 
            array (
                'id' => 115,
                'movie_id' => 32,
                'genre_id' => 7,
                'created_at' => '2021-05-01 14:21:25',
                'updated_at' => '2021-05-01 14:21:25',
            ),
            102 => 
            array (
                'id' => 116,
                'movie_id' => 32,
                'genre_id' => 10,
                'created_at' => '2021-05-01 14:21:25',
                'updated_at' => '2021-05-01 14:21:25',
            ),
            103 => 
            array (
                'id' => 117,
                'movie_id' => 32,
                'genre_id' => 15,
                'created_at' => '2021-05-01 14:21:25',
                'updated_at' => '2021-05-01 14:21:25',
            ),
            104 => 
            array (
                'id' => 123,
                'movie_id' => 34,
                'genre_id' => 2,
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            105 => 
            array (
                'id' => 124,
                'movie_id' => 34,
                'genre_id' => 7,
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            106 => 
            array (
                'id' => 125,
                'movie_id' => 34,
                'genre_id' => 12,
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            107 => 
            array (
                'id' => 126,
                'movie_id' => 34,
                'genre_id' => 14,
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            108 => 
            array (
                'id' => 127,
                'movie_id' => 34,
                'genre_id' => 15,
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            109 => 
            array (
                'id' => 128,
                'movie_id' => 35,
                'genre_id' => 2,
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            110 => 
            array (
                'id' => 129,
                'movie_id' => 35,
                'genre_id' => 7,
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            111 => 
            array (
                'id' => 130,
                'movie_id' => 35,
                'genre_id' => 13,
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            112 => 
            array (
                'id' => 131,
                'movie_id' => 35,
                'genre_id' => 15,
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            113 => 
            array (
                'id' => 132,
                'movie_id' => 36,
                'genre_id' => 2,
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            114 => 
            array (
                'id' => 133,
                'movie_id' => 36,
                'genre_id' => 7,
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            115 => 
            array (
                'id' => 134,
                'movie_id' => 36,
                'genre_id' => 10,
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            116 => 
            array (
                'id' => 135,
                'movie_id' => 36,
                'genre_id' => 13,
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            117 => 
            array (
                'id' => 136,
                'movie_id' => 36,
                'genre_id' => 15,
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            118 => 
            array (
                'id' => 137,
                'movie_id' => 37,
                'genre_id' => 2,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            119 => 
            array (
                'id' => 138,
                'movie_id' => 37,
                'genre_id' => 7,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            120 => 
            array (
                'id' => 139,
                'movie_id' => 37,
                'genre_id' => 10,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            121 => 
            array (
                'id' => 140,
                'movie_id' => 37,
                'genre_id' => 13,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            122 => 
            array (
                'id' => 141,
                'movie_id' => 37,
                'genre_id' => 15,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            123 => 
            array (
                'id' => 142,
                'movie_id' => 38,
                'genre_id' => 2,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            124 => 
            array (
                'id' => 143,
                'movie_id' => 38,
                'genre_id' => 3,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            125 => 
            array (
                'id' => 144,
                'movie_id' => 38,
                'genre_id' => 8,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            126 => 
            array (
                'id' => 145,
                'movie_id' => 38,
                'genre_id' => 10,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            127 => 
            array (
                'id' => 146,
                'movie_id' => 38,
                'genre_id' => 11,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            128 => 
            array (
                'id' => 147,
                'movie_id' => 39,
                'genre_id' => 2,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            129 => 
            array (
                'id' => 148,
                'movie_id' => 39,
                'genre_id' => 3,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            130 => 
            array (
                'id' => 149,
                'movie_id' => 39,
                'genre_id' => 8,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            131 => 
            array (
                'id' => 150,
                'movie_id' => 39,
                'genre_id' => 10,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            132 => 
            array (
                'id' => 151,
                'movie_id' => 39,
                'genre_id' => 11,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            133 => 
            array (
                'id' => 152,
                'movie_id' => 40,
                'genre_id' => 2,
                'created_at' => '2021-06-02 13:50:08',
                'updated_at' => '2021-06-02 13:50:08',
            ),
            134 => 
            array (
                'id' => 153,
                'movie_id' => 40,
                'genre_id' => 7,
                'created_at' => '2021-06-02 13:50:08',
                'updated_at' => '2021-06-02 13:50:08',
            ),
            135 => 
            array (
                'id' => 154,
                'movie_id' => 40,
                'genre_id' => 10,
                'created_at' => '2021-06-02 13:50:08',
                'updated_at' => '2021-06-02 13:50:08',
            ),
            136 => 
            array (
                'id' => 155,
                'movie_id' => 40,
                'genre_id' => 14,
                'created_at' => '2021-06-02 13:50:08',
                'updated_at' => '2021-06-02 13:50:08',
            ),
            137 => 
            array (
                'id' => 156,
                'movie_id' => 40,
                'genre_id' => 15,
                'created_at' => '2021-06-02 13:50:08',
                'updated_at' => '2021-06-02 13:50:08',
            ),
            138 => 
            array (
                'id' => 157,
                'movie_id' => 41,
                'genre_id' => 2,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            139 => 
            array (
                'id' => 158,
                'movie_id' => 41,
                'genre_id' => 3,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            140 => 
            array (
                'id' => 159,
                'movie_id' => 41,
                'genre_id' => 7,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            141 => 
            array (
                'id' => 160,
                'movie_id' => 41,
                'genre_id' => 12,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            142 => 
            array (
                'id' => 161,
                'movie_id' => 41,
                'genre_id' => 14,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            143 => 
            array (
                'id' => 162,
                'movie_id' => 41,
                'genre_id' => 15,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            144 => 
            array (
                'id' => 163,
                'movie_id' => 41,
                'genre_id' => 17,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            145 => 
            array (
                'id' => 164,
                'movie_id' => 41,
                'genre_id' => 18,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            146 => 
            array (
                'id' => 172,
                'movie_id' => 43,
                'genre_id' => 2,
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            147 => 
            array (
                'id' => 173,
                'movie_id' => 43,
                'genre_id' => 7,
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            148 => 
            array (
                'id' => 174,
                'movie_id' => 43,
                'genre_id' => 8,
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            149 => 
            array (
                'id' => 175,
                'movie_id' => 43,
                'genre_id' => 12,
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            150 => 
            array (
                'id' => 176,
                'movie_id' => 43,
                'genre_id' => 13,
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            151 => 
            array (
                'id' => 177,
                'movie_id' => 43,
                'genre_id' => 14,
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            152 => 
            array (
                'id' => 178,
                'movie_id' => 43,
                'genre_id' => 15,
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            153 => 
            array (
                'id' => 179,
                'movie_id' => 44,
                'genre_id' => 2,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            154 => 
            array (
                'id' => 180,
                'movie_id' => 44,
                'genre_id' => 7,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            155 => 
            array (
                'id' => 181,
                'movie_id' => 44,
                'genre_id' => 8,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            156 => 
            array (
                'id' => 182,
                'movie_id' => 44,
                'genre_id' => 12,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            157 => 
            array (
                'id' => 183,
                'movie_id' => 44,
                'genre_id' => 13,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            158 => 
            array (
                'id' => 184,
                'movie_id' => 44,
                'genre_id' => 14,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            159 => 
            array (
                'id' => 185,
                'movie_id' => 44,
                'genre_id' => 15,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            160 => 
            array (
                'id' => 186,
                'movie_id' => 45,
                'genre_id' => 2,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            161 => 
            array (
                'id' => 187,
                'movie_id' => 45,
                'genre_id' => 4,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            162 => 
            array (
                'id' => 188,
                'movie_id' => 45,
                'genre_id' => 7,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            163 => 
            array (
                'id' => 189,
                'movie_id' => 45,
                'genre_id' => 10,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            164 => 
            array (
                'id' => 190,
                'movie_id' => 45,
                'genre_id' => 13,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            165 => 
            array (
                'id' => 191,
                'movie_id' => 46,
                'genre_id' => 2,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            166 => 
            array (
                'id' => 192,
                'movie_id' => 46,
                'genre_id' => 7,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            167 => 
            array (
                'id' => 193,
                'movie_id' => 46,
                'genre_id' => 8,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            168 => 
            array (
                'id' => 194,
                'movie_id' => 46,
                'genre_id' => 10,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            169 => 
            array (
                'id' => 195,
                'movie_id' => 47,
                'genre_id' => 2,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            170 => 
            array (
                'id' => 196,
                'movie_id' => 47,
                'genre_id' => 7,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            171 => 
            array (
                'id' => 197,
                'movie_id' => 47,
                'genre_id' => 8,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            172 => 
            array (
                'id' => 198,
                'movie_id' => 47,
                'genre_id' => 10,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
        ));
        
        
    }
}