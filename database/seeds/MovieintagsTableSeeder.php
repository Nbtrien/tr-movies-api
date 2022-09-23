<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MovieintagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movieintags')->delete();
        
        \DB::table('movieintags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 23,
                'tag_id' => 5,
                'created_at' => '2021-04-26 15:42:45',
                'updated_at' => '2021-04-26 15:42:45',
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 15,
                'tag_id' => 1,
                'created_at' => '2021-04-26 16:03:20',
                'updated_at' => '2021-04-26 16:03:20',
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 15,
                'tag_id' => 4,
                'created_at' => '2021-04-26 16:03:21',
                'updated_at' => '2021-04-26 16:03:21',
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 14,
                'tag_id' => 1,
                'created_at' => '2021-04-28 13:31:39',
                'updated_at' => '2021-04-28 13:31:39',
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 14,
                'tag_id' => 4,
                'created_at' => '2021-04-28 13:31:39',
                'updated_at' => '2021-04-28 13:31:39',
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 13,
                'tag_id' => 1,
                'created_at' => '2021-04-28 13:31:59',
                'updated_at' => '2021-04-28 13:31:59',
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 13,
                'tag_id' => 4,
                'created_at' => '2021-04-28 13:31:59',
                'updated_at' => '2021-04-28 13:31:59',
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 6,
                'tag_id' => 1,
                'created_at' => '2021-04-28 13:32:19',
                'updated_at' => '2021-04-28 13:32:19',
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 6,
                'tag_id' => 4,
                'created_at' => '2021-04-28 13:32:19',
                'updated_at' => '2021-04-28 13:32:19',
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 9,
                'tag_id' => 1,
                'created_at' => '2021-04-28 13:32:31',
                'updated_at' => '2021-04-28 13:32:31',
            ),
            10 => 
            array (
                'id' => 11,
                'movie_id' => 9,
                'tag_id' => 4,
                'created_at' => '2021-04-28 13:32:31',
                'updated_at' => '2021-04-28 13:32:31',
            ),
            11 => 
            array (
                'id' => 12,
                'movie_id' => 23,
                'tag_id' => 4,
                'created_at' => '2021-04-28 13:32:43',
                'updated_at' => '2021-04-28 13:32:43',
            ),
            12 => 
            array (
                'id' => 13,
                'movie_id' => 12,
                'tag_id' => 4,
                'created_at' => '2021-04-28 13:33:00',
                'updated_at' => '2021-04-28 13:33:00',
            ),
            13 => 
            array (
                'id' => 14,
                'movie_id' => 11,
                'tag_id' => 4,
                'created_at' => '2021-04-28 13:33:06',
                'updated_at' => '2021-04-28 13:33:06',
            ),
            14 => 
            array (
                'id' => 15,
                'movie_id' => 22,
                'tag_id' => 5,
                'created_at' => '2021-04-28 14:08:35',
                'updated_at' => '2021-04-28 14:08:35',
            ),
            15 => 
            array (
                'id' => 16,
                'movie_id' => 8,
                'tag_id' => 5,
                'created_at' => '2021-04-29 15:45:17',
                'updated_at' => '2021-04-29 15:45:17',
            ),
            16 => 
            array (
                'id' => 17,
                'movie_id' => 8,
                'tag_id' => 6,
                'created_at' => '2021-04-29 15:45:17',
                'updated_at' => '2021-04-29 15:45:17',
            ),
            17 => 
            array (
                'id' => 18,
                'movie_id' => 24,
                'tag_id' => 5,
                'created_at' => '2021-04-29 15:45:26',
                'updated_at' => '2021-04-29 15:45:26',
            ),
            18 => 
            array (
                'id' => 19,
                'movie_id' => 24,
                'tag_id' => 6,
                'created_at' => '2021-04-29 15:45:26',
                'updated_at' => '2021-04-29 15:45:26',
            ),
            19 => 
            array (
                'id' => 20,
                'movie_id' => 25,
                'tag_id' => 7,
                'created_at' => '2021-05-01 13:48:07',
                'updated_at' => '2021-05-01 13:48:07',
            ),
            20 => 
            array (
                'id' => 21,
                'movie_id' => 25,
                'tag_id' => 8,
                'created_at' => '2021-05-01 13:48:07',
                'updated_at' => '2021-05-01 13:48:07',
            ),
            21 => 
            array (
                'id' => 22,
                'movie_id' => 26,
                'tag_id' => 7,
                'created_at' => '2021-05-01 13:48:20',
                'updated_at' => '2021-05-01 13:48:20',
            ),
            22 => 
            array (
                'id' => 23,
                'movie_id' => 26,
                'tag_id' => 8,
                'created_at' => '2021-05-01 13:48:20',
                'updated_at' => '2021-05-01 13:48:20',
            ),
            23 => 
            array (
                'id' => 24,
                'movie_id' => 27,
                'tag_id' => 7,
                'created_at' => '2021-05-01 13:53:29',
                'updated_at' => '2021-05-01 13:53:29',
            ),
            24 => 
            array (
                'id' => 25,
                'movie_id' => 27,
                'tag_id' => 8,
                'created_at' => '2021-05-01 13:53:29',
                'updated_at' => '2021-05-01 13:53:29',
            ),
            25 => 
            array (
                'id' => 26,
                'movie_id' => 28,
                'tag_id' => 7,
                'created_at' => '2021-05-01 14:00:54',
                'updated_at' => '2021-05-01 14:00:54',
            ),
            26 => 
            array (
                'id' => 27,
                'movie_id' => 28,
                'tag_id' => 8,
                'created_at' => '2021-05-01 14:00:54',
                'updated_at' => '2021-05-01 14:00:54',
            ),
            27 => 
            array (
                'id' => 28,
                'movie_id' => 29,
                'tag_id' => 7,
                'created_at' => '2021-05-01 14:05:38',
                'updated_at' => '2021-05-01 14:05:38',
            ),
            28 => 
            array (
                'id' => 29,
                'movie_id' => 29,
                'tag_id' => 8,
                'created_at' => '2021-05-01 14:05:38',
                'updated_at' => '2021-05-01 14:05:38',
            ),
            29 => 
            array (
                'id' => 30,
                'movie_id' => 30,
                'tag_id' => 7,
                'created_at' => '2021-05-01 14:10:46',
                'updated_at' => '2021-05-01 14:10:46',
            ),
            30 => 
            array (
                'id' => 31,
                'movie_id' => 30,
                'tag_id' => 8,
                'created_at' => '2021-05-01 14:10:46',
                'updated_at' => '2021-05-01 14:10:46',
            ),
            31 => 
            array (
                'id' => 32,
                'movie_id' => 31,
                'tag_id' => 7,
                'created_at' => '2021-05-01 14:15:09',
                'updated_at' => '2021-05-01 14:15:09',
            ),
            32 => 
            array (
                'id' => 33,
                'movie_id' => 31,
                'tag_id' => 8,
                'created_at' => '2021-05-01 14:15:09',
                'updated_at' => '2021-05-01 14:15:09',
            ),
            33 => 
            array (
                'id' => 34,
                'movie_id' => 32,
                'tag_id' => 7,
                'created_at' => '2021-05-01 14:21:25',
                'updated_at' => '2021-05-01 14:21:25',
            ),
            34 => 
            array (
                'id' => 35,
                'movie_id' => 32,
                'tag_id' => 8,
                'created_at' => '2021-05-01 14:21:25',
                'updated_at' => '2021-05-01 14:21:25',
            ),
            35 => 
            array (
                'id' => 36,
                'movie_id' => 16,
                'tag_id' => 9,
                'created_at' => '2021-05-01 14:27:34',
                'updated_at' => '2021-05-01 14:27:34',
            ),
            36 => 
            array (
                'id' => 37,
                'movie_id' => 16,
                'tag_id' => 10,
                'created_at' => '2021-05-01 14:27:34',
                'updated_at' => '2021-05-01 14:27:34',
            ),
            37 => 
            array (
                'id' => 38,
                'movie_id' => 16,
                'tag_id' => 11,
                'created_at' => '2021-05-01 14:27:34',
                'updated_at' => '2021-05-01 14:27:34',
            ),
            38 => 
            array (
                'id' => 39,
                'movie_id' => 17,
                'tag_id' => 9,
                'created_at' => '2021-05-01 14:28:30',
                'updated_at' => '2021-05-01 14:28:30',
            ),
            39 => 
            array (
                'id' => 40,
                'movie_id' => 17,
                'tag_id' => 10,
                'created_at' => '2021-05-01 14:28:30',
                'updated_at' => '2021-05-01 14:28:30',
            ),
            40 => 
            array (
                'id' => 41,
                'movie_id' => 17,
                'tag_id' => 11,
                'created_at' => '2021-05-01 14:28:30',
                'updated_at' => '2021-05-01 14:28:30',
            ),
            41 => 
            array (
                'id' => 42,
                'movie_id' => 18,
                'tag_id' => 9,
                'created_at' => '2021-05-01 14:29:28',
                'updated_at' => '2021-05-01 14:29:28',
            ),
            42 => 
            array (
                'id' => 43,
                'movie_id' => 18,
                'tag_id' => 10,
                'created_at' => '2021-05-01 14:29:28',
                'updated_at' => '2021-05-01 14:29:28',
            ),
            43 => 
            array (
                'id' => 44,
                'movie_id' => 18,
                'tag_id' => 11,
                'created_at' => '2021-05-01 14:29:28',
                'updated_at' => '2021-05-01 14:29:28',
            ),
            44 => 
            array (
                'id' => 45,
                'movie_id' => 15,
                'tag_id' => 12,
                'created_at' => '2021-05-01 14:39:23',
                'updated_at' => '2021-05-01 14:39:23',
            ),
            45 => 
            array (
                'id' => 46,
                'movie_id' => 15,
                'tag_id' => 13,
                'created_at' => '2021-05-01 14:39:23',
                'updated_at' => '2021-05-01 14:39:23',
            ),
            46 => 
            array (
                'id' => 47,
                'movie_id' => 15,
                'tag_id' => 14,
                'created_at' => '2021-05-01 14:39:23',
                'updated_at' => '2021-05-01 14:39:23',
            ),
            47 => 
            array (
                'id' => 48,
                'movie_id' => 15,
                'tag_id' => 15,
                'created_at' => '2021-05-01 14:39:23',
                'updated_at' => '2021-05-01 14:39:23',
            ),
            48 => 
            array (
                'id' => 49,
                'movie_id' => 14,
                'tag_id' => 12,
                'created_at' => '2021-05-01 14:39:50',
                'updated_at' => '2021-05-01 14:39:50',
            ),
            49 => 
            array (
                'id' => 50,
                'movie_id' => 14,
                'tag_id' => 13,
                'created_at' => '2021-05-01 14:39:50',
                'updated_at' => '2021-05-01 14:39:50',
            ),
            50 => 
            array (
                'id' => 51,
                'movie_id' => 14,
                'tag_id' => 14,
                'created_at' => '2021-05-01 14:39:50',
                'updated_at' => '2021-05-01 14:39:50',
            ),
            51 => 
            array (
                'id' => 52,
                'movie_id' => 14,
                'tag_id' => 15,
                'created_at' => '2021-05-01 14:39:50',
                'updated_at' => '2021-05-01 14:39:50',
            ),
            52 => 
            array (
                'id' => 53,
                'movie_id' => 13,
                'tag_id' => 12,
                'created_at' => '2021-05-01 14:40:05',
                'updated_at' => '2021-05-01 14:40:05',
            ),
            53 => 
            array (
                'id' => 54,
                'movie_id' => 13,
                'tag_id' => 13,
                'created_at' => '2021-05-01 14:40:05',
                'updated_at' => '2021-05-01 14:40:05',
            ),
            54 => 
            array (
                'id' => 55,
                'movie_id' => 13,
                'tag_id' => 14,
                'created_at' => '2021-05-01 14:40:05',
                'updated_at' => '2021-05-01 14:40:05',
            ),
            55 => 
            array (
                'id' => 56,
                'movie_id' => 13,
                'tag_id' => 15,
                'created_at' => '2021-05-01 14:40:05',
                'updated_at' => '2021-05-01 14:40:05',
            ),
            56 => 
            array (
                'id' => 57,
                'movie_id' => 6,
                'tag_id' => 12,
                'created_at' => '2021-05-01 14:40:18',
                'updated_at' => '2021-05-01 14:40:18',
            ),
            57 => 
            array (
                'id' => 58,
                'movie_id' => 6,
                'tag_id' => 13,
                'created_at' => '2021-05-01 14:40:18',
                'updated_at' => '2021-05-01 14:40:18',
            ),
            58 => 
            array (
                'id' => 59,
                'movie_id' => 6,
                'tag_id' => 14,
                'created_at' => '2021-05-01 14:40:18',
                'updated_at' => '2021-05-01 14:40:18',
            ),
            59 => 
            array (
                'id' => 60,
                'movie_id' => 6,
                'tag_id' => 15,
                'created_at' => '2021-05-01 14:40:18',
                'updated_at' => '2021-05-01 14:40:18',
            ),
            60 => 
            array (
                'id' => 61,
                'movie_id' => 21,
                'tag_id' => 9,
                'created_at' => '2021-05-07 13:22:26',
                'updated_at' => '2021-05-07 13:22:26',
            ),
            61 => 
            array (
                'id' => 62,
                'movie_id' => 21,
                'tag_id' => 11,
                'created_at' => '2021-05-07 13:22:26',
                'updated_at' => '2021-05-07 13:22:26',
            ),
            62 => 
            array (
                'id' => 63,
                'movie_id' => 19,
                'tag_id' => 9,
                'created_at' => '2021-05-07 13:22:59',
                'updated_at' => '2021-05-07 13:22:59',
            ),
            63 => 
            array (
                'id' => 64,
                'movie_id' => 19,
                'tag_id' => 11,
                'created_at' => '2021-05-07 13:22:59',
                'updated_at' => '2021-05-07 13:22:59',
            ),
            64 => 
            array (
                'id' => 65,
                'movie_id' => 20,
                'tag_id' => 9,
                'created_at' => '2021-05-07 13:23:25',
                'updated_at' => '2021-05-07 13:23:25',
            ),
            65 => 
            array (
                'id' => 66,
                'movie_id' => 20,
                'tag_id' => 11,
                'created_at' => '2021-05-07 13:23:25',
                'updated_at' => '2021-05-07 13:23:25',
            ),
            66 => 
            array (
                'id' => 69,
                'movie_id' => 34,
                'tag_id' => 5,
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            67 => 
            array (
                'id' => 70,
                'movie_id' => 34,
                'tag_id' => 6,
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            68 => 
            array (
                'id' => 71,
                'movie_id' => 22,
                'tag_id' => 8,
                'created_at' => '2021-05-07 15:13:09',
                'updated_at' => '2021-05-07 15:13:09',
            ),
            69 => 
            array (
                'id' => 72,
                'movie_id' => 10,
                'tag_id' => 8,
                'created_at' => '2021-05-08 16:20:51',
                'updated_at' => '2021-05-08 16:20:51',
            ),
            70 => 
            array (
                'id' => 73,
                'movie_id' => 35,
                'tag_id' => 3,
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            71 => 
            array (
                'id' => 74,
                'movie_id' => 35,
                'tag_id' => 4,
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            72 => 
            array (
                'id' => 75,
                'movie_id' => 36,
                'tag_id' => 8,
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            73 => 
            array (
                'id' => 76,
                'movie_id' => 36,
                'tag_id' => 16,
                'created_at' => '2021-06-02 13:12:57',
                'updated_at' => '2021-06-02 13:12:57',
            ),
            74 => 
            array (
                'id' => 77,
                'movie_id' => 36,
                'tag_id' => 17,
                'created_at' => '2021-06-02 13:12:57',
                'updated_at' => '2021-06-02 13:12:57',
            ),
            75 => 
            array (
                'id' => 78,
                'movie_id' => 37,
                'tag_id' => 8,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            76 => 
            array (
                'id' => 79,
                'movie_id' => 37,
                'tag_id' => 16,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            77 => 
            array (
                'id' => 80,
                'movie_id' => 37,
                'tag_id' => 17,
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            78 => 
            array (
                'id' => 81,
                'movie_id' => 38,
                'tag_id' => 18,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            79 => 
            array (
                'id' => 82,
                'movie_id' => 38,
                'tag_id' => 19,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            80 => 
            array (
                'id' => 83,
                'movie_id' => 38,
                'tag_id' => 20,
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            81 => 
            array (
                'id' => 84,
                'movie_id' => 39,
                'tag_id' => 18,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            82 => 
            array (
                'id' => 85,
                'movie_id' => 39,
                'tag_id' => 19,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            83 => 
            array (
                'id' => 86,
                'movie_id' => 39,
                'tag_id' => 20,
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            84 => 
            array (
                'id' => 87,
                'movie_id' => 41,
                'tag_id' => 4,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            85 => 
            array (
                'id' => 88,
                'movie_id' => 41,
                'tag_id' => 5,
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            86 => 
            array (
                'id' => 89,
                'movie_id' => 41,
                'tag_id' => 21,
                'created_at' => '2021-06-02 13:57:27',
                'updated_at' => '2021-06-02 13:57:27',
            ),
            87 => 
            array (
                'id' => 90,
                'movie_id' => 23,
                'tag_id' => 21,
                'created_at' => '2021-06-02 13:57:29',
                'updated_at' => '2021-06-02 13:57:29',
            ),
            88 => 
            array (
                'id' => 91,
                'movie_id' => 44,
                'tag_id' => 22,
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            89 => 
            array (
                'id' => 92,
                'movie_id' => 43,
                'tag_id' => 22,
                'created_at' => '2021-06-02 14:34:52',
                'updated_at' => '2021-06-02 14:34:52',
            ),
            90 => 
            array (
                'id' => 93,
                'movie_id' => 45,
                'tag_id' => 1,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            91 => 
            array (
                'id' => 94,
                'movie_id' => 45,
                'tag_id' => 4,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            92 => 
            array (
                'id' => 95,
                'movie_id' => 45,
                'tag_id' => 12,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            93 => 
            array (
                'id' => 96,
                'movie_id' => 45,
                'tag_id' => 14,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            94 => 
            array (
                'id' => 97,
                'movie_id' => 45,
                'tag_id' => 23,
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            95 => 
            array (
                'id' => 98,
                'movie_id' => 46,
                'tag_id' => 1,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            96 => 
            array (
                'id' => 99,
                'movie_id' => 46,
                'tag_id' => 4,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            97 => 
            array (
                'id' => 100,
                'movie_id' => 46,
                'tag_id' => 12,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            98 => 
            array (
                'id' => 101,
                'movie_id' => 46,
                'tag_id' => 14,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            99 => 
            array (
                'id' => 102,
                'movie_id' => 46,
                'tag_id' => 23,
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            100 => 
            array (
                'id' => 103,
                'movie_id' => 47,
                'tag_id' => 1,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            101 => 
            array (
                'id' => 104,
                'movie_id' => 47,
                'tag_id' => 4,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            102 => 
            array (
                'id' => 105,
                'movie_id' => 47,
                'tag_id' => 12,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            103 => 
            array (
                'id' => 106,
                'movie_id' => 47,
                'tag_id' => 14,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            104 => 
            array (
                'id' => 107,
                'movie_id' => 47,
                'tag_id' => 15,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            105 => 
            array (
                'id' => 108,
                'movie_id' => 47,
                'tag_id' => 23,
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
        ));
        
        
    }
}