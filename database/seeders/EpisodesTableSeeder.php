<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EpisodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('episodes')->delete();
        
        \DB::table('episodes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'seriesmovie_id' => 4,
                'episode' => 1,
                'title' => 'Suzie, nghe rõ không?',
                'profileimage_id' => 27,
                'video_id' => 5,
                'created_at' => '2021-04-20 17:53:52',
                'updated_at' => '2021-05-07 14:20:58',
            ),
            1 => 
            array (
                'id' => 3,
                'seriesmovie_id' => 4,
                'episode' => 2,
                'title' => 'Lũ chuột ở trung tâm thương mại',
                'profileimage_id' => 57,
                'video_id' => 15,
                'created_at' => '2021-04-26 12:20:31',
                'updated_at' => '2021-04-26 12:20:31',
            ),
            2 => 
            array (
                'id' => 4,
                'seriesmovie_id' => 11,
                'episode' => 1,
                'title' => 'Will Byers biến mất',
                'profileimage_id' => 62,
                'video_id' => 16,
                'created_at' => '2021-04-29 15:24:42',
                'updated_at' => '2021-04-29 15:24:42',
            ),
            3 => 
            array (
                'id' => 5,
                'seriesmovie_id' => 11,
                'episode' => 2,
                'title' => 'Kẻ lập dị ở đường Maple',
                'profileimage_id' => 63,
                'video_id' => 17,
                'created_at' => '2021-04-29 15:26:49',
                'updated_at' => '2021-05-06 14:46:06',
            ),
            4 => 
            array (
                'id' => 6,
                'seriesmovie_id' => 11,
                'episode' => 3,
                'title' => 'Đèn Giáng sinh',
                'profileimage_id' => 64,
                'video_id' => 18,
                'created_at' => '2021-04-29 15:28:53',
                'updated_at' => '2021-04-29 15:28:53',
            ),
            5 => 
            array (
                'id' => 7,
                'seriesmovie_id' => 11,
                'episode' => 4,
                'title' => 'Cái xác',
                'profileimage_id' => 65,
                'video_id' => 19,
                'created_at' => '2021-04-29 15:32:13',
                'updated_at' => '2021-04-29 15:32:13',
            ),
            6 => 
            array (
                'id' => 8,
                'seriesmovie_id' => 11,
                'episode' => 5,
                'title' => 'Con bọ chét và người đi dây',
                'profileimage_id' => 66,
                'video_id' => 20,
                'created_at' => '2021-04-29 15:34:56',
                'updated_at' => '2021-04-29 15:34:56',
            ),
            7 => 
            array (
                'id' => 9,
                'seriesmovie_id' => 11,
                'episode' => 6,
                'title' => 'Con quái vật',
                'profileimage_id' => 67,
                'video_id' => 21,
                'created_at' => '2021-04-29 15:37:29',
                'updated_at' => '2021-04-29 15:37:29',
            ),
            8 => 
            array (
                'id' => 10,
                'seriesmovie_id' => 11,
                'episode' => 7,
                'title' => 'Bồn nước',
                'profileimage_id' => 68,
                'video_id' => 22,
                'created_at' => '2021-04-29 15:42:30',
                'updated_at' => '2021-04-29 15:42:30',
            ),
            9 => 
            array (
                'id' => 11,
                'seriesmovie_id' => 11,
                'episode' => 8,
                'title' => 'Thế giới lộn ngược',
                'profileimage_id' => 69,
                'video_id' => 23,
                'created_at' => '2021-04-29 15:44:24',
                'updated_at' => '2021-04-29 15:44:24',
            ),
            10 => 
            array (
                'id' => 12,
                'seriesmovie_id' => 4,
                'episode' => 3,
                'title' => 'Vụ án người cứu hộ mất tích',
                'profileimage_id' => 90,
                'video_id' => 32,
                'created_at' => '2021-05-07 14:22:05',
                'updated_at' => '2021-05-07 14:22:05',
            ),
            11 => 
            array (
                'id' => 13,
                'seriesmovie_id' => 4,
                'episode' => 4,
                'title' => 'Thử nghiệm phòng xông hơi',
                'profileimage_id' => 91,
                'video_id' => 33,
                'created_at' => '2021-05-07 14:22:53',
                'updated_at' => '2021-05-07 14:22:53',
            ),
            12 => 
            array (
                'id' => 14,
                'seriesmovie_id' => 4,
                'episode' => 5,
                'title' => 'Đội quân của Quỷ tâm linh',
                'profileimage_id' => 92,
                'video_id' => 34,
                'created_at' => '2021-05-07 14:23:41',
                'updated_at' => '2021-05-07 14:23:41',
            ),
            13 => 
            array (
                'id' => 15,
                'seriesmovie_id' => 4,
                'episode' => 6,
                'title' => 'Từ nhiều thành một',
                'profileimage_id' => 93,
                'video_id' => 35,
                'created_at' => '2021-05-07 14:24:25',
                'updated_at' => '2021-05-07 14:24:25',
            ),
            14 => 
            array (
                'id' => 16,
                'seriesmovie_id' => 4,
                'episode' => 7,
                'title' => 'Vết cắn',
                'profileimage_id' => 94,
                'video_id' => 36,
                'created_at' => '2021-05-07 14:25:35',
                'updated_at' => '2021-05-07 14:25:35',
            ),
            15 => 
            array (
                'id' => 17,
                'seriesmovie_id' => 4,
                'episode' => 8,
                'title' => 'Trận chiến Starcourt',
                'profileimage_id' => 95,
                'video_id' => 37,
                'created_at' => '2021-05-07 14:27:22',
                'updated_at' => '2021-05-07 14:27:22',
            ),
            16 => 
            array (
                'id' => 18,
                'seriesmovie_id' => 12,
                'episode' => 1,
                'title' => 'Max điên',
                'profileimage_id' => 102,
                'video_id' => 38,
                'created_at' => '2021-05-07 14:38:19',
                'updated_at' => '2021-05-07 14:38:19',
            ),
            17 => 
            array (
                'id' => 19,
                'seriesmovie_id' => 12,
                'episode' => 2,
                'title' => 'Cho kẹo hay bị ghẹo, đồ quái dị',
                'profileimage_id' => 103,
                'video_id' => 39,
                'created_at' => '2021-05-07 14:39:09',
                'updated_at' => '2021-05-07 14:39:09',
            ),
            18 => 
            array (
                'id' => 20,
                'seriesmovie_id' => 12,
                'episode' => 3,
                'title' => 'Nòng nọc',
                'profileimage_id' => 104,
                'video_id' => 40,
                'created_at' => '2021-05-07 14:40:45',
                'updated_at' => '2021-05-07 14:40:45',
            ),
            19 => 
            array (
                'id' => 21,
                'seriesmovie_id' => 12,
                'episode' => 4,
                'title' => 'Will - Kẻ thông thái',
                'profileimage_id' => 105,
                'video_id' => 41,
                'created_at' => '2021-05-07 14:44:39',
                'updated_at' => '2021-05-07 14:44:39',
            ),
            20 => 
            array (
                'id' => 22,
                'seriesmovie_id' => 12,
                'episode' => 5,
                'title' => 'Trò đào đất',
                'profileimage_id' => 106,
                'video_id' => 42,
                'created_at' => '2021-05-07 14:45:45',
                'updated_at' => '2021-05-07 14:45:45',
            ),
            21 => 
            array (
                'id' => 23,
                'seriesmovie_id' => 12,
                'episode' => 6,
                'title' => 'Gián điệp',
                'profileimage_id' => 107,
                'video_id' => 43,
                'created_at' => '2021-05-07 14:46:45',
                'updated_at' => '2021-05-07 14:46:45',
            ),
            22 => 
            array (
                'id' => 24,
                'seriesmovie_id' => 12,
                'episode' => 7,
                'title' => 'Người chị mất tích',
                'profileimage_id' => 108,
                'video_id' => 44,
                'created_at' => '2021-05-07 14:47:28',
                'updated_at' => '2021-05-07 14:47:28',
            ),
            23 => 
            array (
                'id' => 25,
                'seriesmovie_id' => 12,
                'episode' => 8,
                'title' => 'Con quỷ tâm linh',
                'profileimage_id' => 109,
                'video_id' => 45,
                'created_at' => '2021-05-07 14:50:13',
                'updated_at' => '2021-05-07 14:50:13',
            ),
            24 => 
            array (
                'id' => 26,
                'seriesmovie_id' => 10,
                'episode' => 1,
                'title' => 'We Only See Each Other at Weddings and Funerals',
                'profileimage_id' => 110,
                'video_id' => 46,
                'created_at' => '2021-05-07 14:55:55',
                'updated_at' => '2021-05-07 14:55:55',
            ),
            25 => 
            array (
                'id' => 27,
                'seriesmovie_id' => 10,
                'episode' => 2,
                'title' => 'Run Boy Run',
                'profileimage_id' => 111,
                'video_id' => 47,
                'created_at' => '2021-05-07 14:59:07',
                'updated_at' => '2021-05-07 14:59:07',
            ),
            26 => 
            array (
                'id' => 28,
                'seriesmovie_id' => 10,
                'episode' => 3,
                'title' => 'Extra Ordinary',
                'profileimage_id' => 112,
                'video_id' => 48,
                'created_at' => '2021-05-07 15:00:25',
                'updated_at' => '2021-05-07 15:00:25',
            ),
            27 => 
            array (
                'id' => 29,
                'seriesmovie_id' => 10,
                'episode' => 4,
                'title' => 'Man on the Moon',
                'profileimage_id' => 113,
                'video_id' => 49,
                'created_at' => '2021-05-07 15:01:10',
                'updated_at' => '2021-05-07 15:01:10',
            ),
            28 => 
            array (
                'id' => 30,
                'seriesmovie_id' => 10,
                'episode' => 5,
                'title' => 'Number Five',
                'profileimage_id' => 114,
                'video_id' => 50,
                'created_at' => '2021-05-07 15:03:47',
                'updated_at' => '2021-05-07 15:03:47',
            ),
            29 => 
            array (
                'id' => 31,
                'seriesmovie_id' => 10,
                'episode' => 6,
                'title' => 'The Day That Wasn\'t',
                'profileimage_id' => 115,
                'video_id' => 51,
                'created_at' => '2021-05-07 15:05:08',
                'updated_at' => '2021-05-07 15:05:08',
            ),
            30 => 
            array (
                'id' => 32,
                'seriesmovie_id' => 10,
                'episode' => 7,
                'title' => 'The Day That Was',
                'profileimage_id' => 116,
                'video_id' => 52,
                'created_at' => '2021-05-07 15:06:36',
                'updated_at' => '2021-05-07 15:06:36',
            ),
            31 => 
            array (
                'id' => 33,
                'seriesmovie_id' => 10,
                'episode' => 8,
                'title' => 'I Heard a Rumor',
                'profileimage_id' => 117,
                'video_id' => 53,
                'created_at' => '2021-05-07 15:07:29',
                'updated_at' => '2021-05-07 15:07:29',
            ),
            32 => 
            array (
                'id' => 34,
                'seriesmovie_id' => 10,
                'episode' => 9,
                'title' => 'Changes',
                'profileimage_id' => 118,
                'video_id' => 54,
                'created_at' => '2021-05-07 15:08:13',
                'updated_at' => '2021-05-07 15:08:13',
            ),
            33 => 
            array (
                'id' => 35,
                'seriesmovie_id' => 10,
                'episode' => 10,
                'title' => 'The White Violin',
                'profileimage_id' => 119,
                'video_id' => 55,
                'created_at' => '2021-05-07 15:09:18',
                'updated_at' => '2021-05-07 15:09:18',
            ),
            34 => 
            array (
                'id' => 36,
                'seriesmovie_id' => 9,
                'episode' => 1,
                'title' => 'The End\'s Beginning',
                'profileimage_id' => 120,
                'video_id' => 56,
                'created_at' => '2021-05-07 15:20:57',
                'updated_at' => '2021-05-07 15:20:57',
            ),
            35 => 
            array (
                'id' => 37,
                'seriesmovie_id' => 9,
                'episode' => 2,
                'title' => 'Four Marks',
                'profileimage_id' => 121,
                'video_id' => 57,
                'created_at' => '2021-05-07 15:21:44',
                'updated_at' => '2021-05-07 15:21:44',
            ),
            36 => 
            array (
                'id' => 38,
                'seriesmovie_id' => 9,
                'episode' => 3,
                'title' => 'Betrayer Moon',
                'profileimage_id' => 122,
                'video_id' => 58,
                'created_at' => '2021-05-07 15:22:25',
                'updated_at' => '2021-05-07 15:22:25',
            ),
            37 => 
            array (
                'id' => 39,
                'seriesmovie_id' => 9,
                'episode' => 4,
                'title' => 'Of Banquets, Bastards and Burials',
                'profileimage_id' => 123,
                'video_id' => 59,
                'created_at' => '2021-05-07 15:23:50',
                'updated_at' => '2021-05-07 15:23:50',
            ),
            38 => 
            array (
                'id' => 40,
                'seriesmovie_id' => 9,
                'episode' => 5,
                'title' => 'Bottled Appetites',
                'profileimage_id' => 124,
                'video_id' => 60,
                'created_at' => '2021-05-07 15:24:29',
                'updated_at' => '2021-05-07 15:24:29',
            ),
            39 => 
            array (
                'id' => 41,
                'seriesmovie_id' => 9,
                'episode' => 6,
                'title' => 'Rare Species',
                'profileimage_id' => 125,
                'video_id' => 61,
                'created_at' => '2021-05-07 15:25:13',
                'updated_at' => '2021-05-07 15:25:13',
            ),
            40 => 
            array (
                'id' => 42,
                'seriesmovie_id' => 9,
                'episode' => 7,
                'title' => 'Before a Fall',
                'profileimage_id' => 126,
                'video_id' => 62,
                'created_at' => '2021-05-07 15:25:47',
                'updated_at' => '2021-05-07 15:25:47',
            ),
            41 => 
            array (
                'id' => 43,
                'seriesmovie_id' => 9,
                'episode' => 8,
                'title' => 'Much More',
                'profileimage_id' => 127,
                'video_id' => 63,
                'created_at' => '2021-05-07 15:26:46',
                'updated_at' => '2021-05-07 15:26:46',
            ),
            42 => 
            array (
                'id' => 44,
                'seriesmovie_id' => 12,
                'episode' => 9,
                'title' => 'Cánh cổng',
                'profileimage_id' => 128,
                'video_id' => 64,
                'created_at' => '2021-05-07 15:29:17',
                'updated_at' => '2021-05-07 15:29:17',
            ),
            43 => 
            array (
                'id' => 45,
                'seriesmovie_id' => 6,
                'episode' => 1,
                'title' => 'In the Beginning',
                'profileimage_id' => 129,
                'video_id' => 65,
                'created_at' => '2021-05-08 02:05:52',
                'updated_at' => '2021-05-08 02:08:09',
            ),
            44 => 
            array (
                'id' => 46,
                'seriesmovie_id' => 6,
                'episode' => 2,
                'title' => 'The Book',
                'profileimage_id' => 130,
                'video_id' => 66,
                'created_at' => '2021-05-08 14:29:23',
                'updated_at' => '2021-05-08 14:29:23',
            ),
            45 => 
            array (
                'id' => 47,
                'seriesmovie_id' => 6,
                'episode' => 3,
                'title' => 'Hard Times',
                'profileimage_id' => 131,
                'video_id' => 67,
                'created_at' => '2021-05-08 14:30:12',
                'updated_at' => '2021-05-08 14:30:12',
            ),
            46 => 
            array (
                'id' => 48,
                'seriesmovie_id' => 6,
                'episode' => 4,
                'title' => 'Saturday Morning Funtime',
                'profileimage_id' => 132,
                'video_id' => 68,
                'created_at' => '2021-05-08 14:31:03',
                'updated_at' => '2021-05-08 14:31:03',
            ),
            47 => 
            array (
                'id' => 49,
                'seriesmovie_id' => 6,
                'episode' => 5,
                'title' => 'The Doomsday Option',
                'profileimage_id' => 133,
                'video_id' => 69,
                'created_at' => '2021-05-08 14:31:44',
                'updated_at' => '2021-05-08 14:31:44',
            ),
            48 => 
            array (
                'id' => 50,
                'seriesmovie_id' => 6,
                'episode' => 6,
                'title' => 'The Very Last Day of the Rest of Their Lives',
                'profileimage_id' => 134,
                'video_id' => 70,
                'created_at' => '2021-05-08 14:32:29',
                'updated_at' => '2021-05-08 14:32:29',
            ),
            49 => 
            array (
                'id' => 51,
                'seriesmovie_id' => 13,
                'episode' => 1,
                'title' => 'Right Back Where We Started',
                'profileimage_id' => 178,
                'video_id' => 79,
                'created_at' => '2021-06-02 14:01:02',
                'updated_at' => '2021-06-02 14:01:02',
            ),
            50 => 
            array (
                'id' => 52,
                'seriesmovie_id' => 13,
                'episode' => 2,
                'title' => 'The Frankel Footage',
                'profileimage_id' => 179,
                'video_id' => 80,
                'created_at' => '2021-06-02 14:12:22',
                'updated_at' => '2021-06-02 14:12:22',
            ),
            51 => 
            array (
                'id' => 53,
                'seriesmovie_id' => 13,
                'episode' => 3,
                'title' => 'The Swedish Job',
                'profileimage_id' => 180,
                'video_id' => 81,
                'created_at' => '2021-06-02 14:13:02',
                'updated_at' => '2021-06-02 14:13:02',
            ),
            52 => 
            array (
                'id' => 54,
                'seriesmovie_id' => 13,
                'episode' => 4,
                'title' => 'The Majestic 12',
                'profileimage_id' => 181,
                'video_id' => 82,
                'created_at' => '2021-06-02 14:13:58',
                'updated_at' => '2021-06-02 14:13:58',
            ),
            53 => 
            array (
                'id' => 55,
                'seriesmovie_id' => 13,
                'episode' => 5,
                'title' => 'Valhalla',
                'profileimage_id' => 182,
                'video_id' => 83,
                'created_at' => '2021-06-02 14:14:49',
                'updated_at' => '2021-06-02 14:14:49',
            ),
            54 => 
            array (
                'id' => 56,
                'seriesmovie_id' => 13,
                'episode' => 6,
                'title' => 'A Light Supper',
                'profileimage_id' => 183,
                'video_id' => 84,
                'created_at' => '2021-06-02 14:15:30',
                'updated_at' => '2021-06-02 14:15:30',
            ),
            55 => 
            array (
                'id' => 57,
                'seriesmovie_id' => 13,
                'episode' => 7,
                'title' => 'Öga for Öga',
                'profileimage_id' => 184,
                'video_id' => 85,
                'created_at' => '2021-06-02 14:16:18',
                'updated_at' => '2021-06-02 14:16:18',
            ),
            56 => 
            array (
                'id' => 58,
                'seriesmovie_id' => 13,
                'episode' => 8,
                'title' => 'The Seven Stages',
                'profileimage_id' => 185,
                'video_id' => 86,
                'created_at' => '2021-06-02 14:17:16',
                'updated_at' => '2021-06-02 14:17:16',
            ),
            57 => 
            array (
                'id' => 59,
                'seriesmovie_id' => 13,
                'episode' => 9,
                'title' => '743',
                'profileimage_id' => 186,
                'video_id' => 87,
                'created_at' => '2021-06-02 14:17:54',
                'updated_at' => '2021-06-02 14:17:54',
            ),
            58 => 
            array (
                'id' => 60,
                'seriesmovie_id' => 13,
                'episode' => 10,
                'title' => 'The End of Something',
                'profileimage_id' => 187,
                'video_id' => 88,
                'created_at' => '2021-06-02 14:18:46',
                'updated_at' => '2021-06-02 14:18:46',
            ),
            59 => 
            array (
                'id' => 61,
                'seriesmovie_id' => 14,
                'episode' => 1,
                'title' => '',
                'profileimage_id' => 196,
                'video_id' => 89,
                'created_at' => '2021-06-02 14:46:35',
                'updated_at' => '2021-06-02 14:46:35',
            ),
            60 => 
            array (
                'id' => 62,
                'seriesmovie_id' => 14,
                'episode' => 2,
                'title' => '',
                'profileimage_id' => 197,
                'video_id' => 90,
                'created_at' => '2021-06-02 14:49:24',
                'updated_at' => '2021-06-02 14:49:24',
            ),
            61 => 
            array (
                'id' => 63,
                'seriesmovie_id' => 14,
                'episode' => 3,
                'title' => '',
                'profileimage_id' => 199,
                'video_id' => 92,
                'created_at' => '2021-06-02 14:51:41',
                'updated_at' => '2021-06-02 14:51:41',
            ),
            62 => 
            array (
                'id' => 64,
                'seriesmovie_id' => 14,
                'episode' => 4,
                'title' => NULL,
                'profileimage_id' => 200,
                'video_id' => 93,
                'created_at' => '2021-06-02 14:52:41',
                'updated_at' => '2021-06-02 14:52:41',
            ),
            63 => 
            array (
                'id' => 65,
                'seriesmovie_id' => 14,
                'episode' => 5,
                'title' => NULL,
                'profileimage_id' => 201,
                'video_id' => 94,
                'created_at' => '2021-06-02 14:53:27',
                'updated_at' => '2021-06-02 14:53:27',
            ),
            64 => 
            array (
                'id' => 66,
                'seriesmovie_id' => 14,
                'episode' => 6,
                'title' => NULL,
                'profileimage_id' => 202,
                'video_id' => 95,
                'created_at' => '2021-06-02 14:53:59',
                'updated_at' => '2021-06-02 14:53:59',
            ),
            65 => 
            array (
                'id' => 67,
                'seriesmovie_id' => 15,
                'episode' => 1,
                'title' => NULL,
                'profileimage_id' => 203,
                'video_id' => 96,
                'created_at' => '2021-06-02 15:01:31',
                'updated_at' => '2021-06-02 15:01:31',
            ),
            66 => 
            array (
                'id' => 68,
                'seriesmovie_id' => 15,
                'episode' => 2,
                'title' => NULL,
                'profileimage_id' => 204,
                'video_id' => 97,
                'created_at' => '2021-06-02 15:04:53',
                'updated_at' => '2021-06-02 15:04:53',
            ),
            67 => 
            array (
                'id' => 69,
                'seriesmovie_id' => 15,
                'episode' => 3,
                'title' => NULL,
                'profileimage_id' => 205,
                'video_id' => 98,
                'created_at' => '2021-06-02 15:05:16',
                'updated_at' => '2021-06-02 15:05:16',
            ),
            68 => 
            array (
                'id' => 70,
                'seriesmovie_id' => 15,
                'episode' => 4,
                'title' => NULL,
                'profileimage_id' => 206,
                'video_id' => 99,
                'created_at' => '2021-06-02 15:06:03',
                'updated_at' => '2021-06-02 15:06:03',
            ),
            69 => 
            array (
                'id' => 71,
                'seriesmovie_id' => 15,
                'episode' => 5,
                'title' => NULL,
                'profileimage_id' => 207,
                'video_id' => 100,
                'created_at' => '2021-06-02 15:06:27',
                'updated_at' => '2021-06-02 15:06:27',
            ),
            70 => 
            array (
                'id' => 72,
                'seriesmovie_id' => 15,
                'episode' => 6,
                'title' => NULL,
                'profileimage_id' => 208,
                'video_id' => 101,
                'created_at' => '2021-06-02 15:06:55',
                'updated_at' => '2021-06-02 15:06:55',
            ),
        ));
        
        
    }
}