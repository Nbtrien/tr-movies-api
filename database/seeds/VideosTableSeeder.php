<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 3,
            'video_url' => 'Avengers/Avengers Endgame (2019) [BluRay] [1080p] [YTS.LT]/Avengers Endgame 2019.mp4',
                'created_at' => '2021-04-20 16:08:20',
                'updated_at' => '2021-05-06 14:56:01',
            ),
            1 => 
            array (
                'id' => 5,
                'video_url' => 'Stranger things Season 3/Chapter 1 Suzie, Do You Copy.mp4',
                'created_at' => '2021-04-20 17:53:52',
                'updated_at' => '2021-05-07 14:18:53',
            ),
            2 => 
            array (
                'id' => 6,
            'video_url' => 'Avengers/Avengers Infinity War (2018) [BluRay] [1080p] [YTS.AM]/Avengers Infinity War 2018.mp4',
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-05-06 14:54:46',
            ),
            3 => 
            array (
                'id' => 7,
            'video_url' => 'Avengers/Avengers Age of Ultron (2015) [1080p]/Avengers Age of Ultron 2015.mp4',
                'created_at' => '2021-04-21 15:09:51',
                'updated_at' => '2021-05-06 13:11:40',
            ),
            4 => 
            array (
                'id' => 8,
            'video_url' => 'Avengers/The Avengers (2012) [1080p]/The Avengers 2012.mp4',
                'created_at' => '2021-04-21 15:22:10',
                'updated_at' => '2021-05-06 14:52:40',
            ),
            5 => 
            array (
                'id' => 9,
                'video_url' => 'The Lord of the Rings/Lord of the Rings The Fellowship of the Ring 2001/Lord of the Rings The Fellowship of the Ring 2001.mp4',
                'created_at' => '2021-04-21 15:34:47',
                'updated_at' => '2021-05-07 11:51:41',
            ),
            6 => 
            array (
                'id' => 10,
                'video_url' => 'The Lord of the Rings/The Lord of the Rings The Two Towers 2002/The Lord of the Rings The Two Towers 2002.mp4',
                'created_at' => '2021-04-21 15:38:00',
                'updated_at' => '2021-05-07 11:55:48',
            ),
            7 => 
            array (
                'id' => 11,
            'video_url' => 'The Lord of the Rings/The Lord of the Rings - The Return of the King (2003)/The Lord of the Rings - The Return of the King (2003).mp4',
                'created_at' => '2021-04-21 15:56:13',
                'updated_at' => '2021-05-07 11:56:59',
            ),
            8 => 
            array (
                'id' => 12,
                'video_url' => 'The Hobbit/The Hobbit An Unexpected Journey 2012/The Hobbit An Unexpected Journey 2012.mp4',
                'created_at' => '2021-04-21 16:06:25',
                'updated_at' => '2021-05-07 13:20:46',
            ),
            9 => 
            array (
                'id' => 13,
                'video_url' => 'The Hobbit/The Hobbit The Desolation of Smaug 2013/The Hobbit The Desolation of Smaug 2013.mp4',
                'created_at' => '2021-04-21 16:13:03',
                'updated_at' => '2021-05-07 13:24:33',
            ),
            10 => 
            array (
                'id' => 14,
                'video_url' => 'The Hobbit/The Hobbit The Battle of the Five Armies 2014/The Hobbit The Battle of the Five Armies 2014.mp4',
                'created_at' => '2021-04-21 17:05:29',
                'updated_at' => '2021-05-07 13:25:38',
            ),
            11 => 
            array (
                'id' => 15,
                'video_url' => 'Stranger things Season 3/Chapter 2 The Mall Rats.mp4',
                'created_at' => '2021-04-26 12:20:31',
                'updated_at' => '2021-05-07 14:19:26',
            ),
            12 => 
            array (
                'id' => 16,
                'video_url' => 'Stranger%20Things%20Season%201/Episode%201%20The%20Vanishing%20of%20Will%20Byers.mp4',
                'created_at' => '2021-04-29 15:24:42',
                'updated_at' => '2021-04-29 15:24:42',
            ),
            13 => 
            array (
                'id' => 17,
                'video_url' => 'Stranger Things Season 1/Episode 2 The Weirdo on Maple Street.mp4',
                'created_at' => '2021-04-29 15:26:49',
                'updated_at' => '2021-05-06 14:47:15',
            ),
            14 => 
            array (
                'id' => 18,
                'video_url' => 'Stranger Things Season 1/Episode 3 Holly Jolly.mp4',
                'created_at' => '2021-04-29 15:28:53',
                'updated_at' => '2021-05-06 14:48:13',
            ),
            15 => 
            array (
                'id' => 19,
                'video_url' => 'Stranger Things Season 1/Episode 4 The Body.mp4',
                'created_at' => '2021-04-29 15:32:13',
                'updated_at' => '2021-05-06 14:48:41',
            ),
            16 => 
            array (
                'id' => 20,
                'video_url' => 'Stranger Things Season 1/Episode 5 The Flea and the Acrobat.mp4',
                'created_at' => '2021-04-29 15:34:56',
                'updated_at' => '2021-05-06 14:49:21',
            ),
            17 => 
            array (
                'id' => 21,
                'video_url' => 'Stranger Things Season 1/Episode 6 The Monster.mp4',
                'created_at' => '2021-04-29 15:37:29',
                'updated_at' => '2021-05-06 14:50:27',
            ),
            18 => 
            array (
                'id' => 22,
                'video_url' => 'Stranger Things Season 1/Episode 7 The Bathtub.mp4',
                'created_at' => '2021-04-29 15:42:30',
                'updated_at' => '2021-05-06 14:50:51',
            ),
            19 => 
            array (
                'id' => 23,
                'video_url' => 'Stranger Things Season 1/Episode 8 The Upside Down.mp4',
                'created_at' => '2021-04-29 15:44:24',
                'updated_at' => '2021-05-06 14:51:17',
            ),
            20 => 
            array (
                'id' => 24,
                'video_url' => 'Harry Potter/Harry Potter and the Sorcerers Stone 2001/Harry Potter and the Sorcerers Stone 2001.mp4',
                'created_at' => '2021-05-01 13:38:40',
                'updated_at' => '2021-05-07 12:46:25',
            ),
            21 => 
            array (
                'id' => 25,
                'video_url' => 'Harry Potter/Harry Potter and the Chamber of Secrets 2002/Harry Potter and the Chamber of Secrets 2002.mp4',
                'created_at' => '2021-05-01 13:47:12',
                'updated_at' => '2021-05-07 12:48:17',
            ),
            22 => 
            array (
                'id' => 26,
                'video_url' => 'Harry Potter/Harry Potter and the Prisoner of Azkaban 2004/Harry Potter and the Prisoner of Azkaban 2004.mp4',
                'created_at' => '2021-05-01 13:53:29',
                'updated_at' => '2021-05-07 12:49:47',
            ),
            23 => 
            array (
                'id' => 27,
                'video_url' => 'Harry Potter/Harry Potter and the Goblet of Fire 2005/Harry Potter and the Goblet of Fire 2005.mp4',
                'created_at' => '2021-05-01 14:00:54',
                'updated_at' => '2021-05-07 13:11:11',
            ),
            24 => 
            array (
                'id' => 28,
                'video_url' => 'Harry Potter/Harry Potter and the Order of the Phoenix 2007/Harry Potter and the Order of the Phoenix 2007.mp4',
                'created_at' => '2021-05-01 14:05:38',
                'updated_at' => '2021-05-07 13:12:32',
            ),
            25 => 
            array (
                'id' => 29,
                'video_url' => 'Harry Potter/Harry Potter and the Half Blood Prince 2009/Harry Potter and the Half Blood Prince 2009.mp4',
                'created_at' => '2021-05-01 14:10:46',
                'updated_at' => '2021-05-07 12:51:21',
            ),
            26 => 
            array (
                'id' => 30,
                'video_url' => 'Harry Potter/Harry Potter And The Deathly Hallows Part 1 2010/Harry Potter And The Deathly Hallows Part 1 2010 .mp4',
                'created_at' => '2021-05-01 14:15:09',
                'updated_at' => '2021-05-07 13:13:59',
            ),
            27 => 
            array (
                'id' => 31,
                'video_url' => 'Harry Potter/Harry Potter and the Deathly Hallows Part 2 2011/Harry Potter and the Deathly Hallows Part 2 2011.mp4',
                'created_at' => '2021-05-01 14:21:25',
                'updated_at' => '2021-05-07 13:15:02',
            ),
            28 => 
            array (
                'id' => 32,
                'video_url' => 'Stranger things Season 3/Chapter 3 The Case of the Missing Lifeguard.mp4',
                'created_at' => '2021-05-07 14:22:05',
                'updated_at' => '2021-05-07 14:22:05',
            ),
            29 => 
            array (
                'id' => 33,
                'video_url' => 'Stranger things Season 3/Chapter 4 The Sauna Test.mp4',
                'created_at' => '2021-05-07 14:22:53',
                'updated_at' => '2021-05-07 14:22:53',
            ),
            30 => 
            array (
                'id' => 34,
                'video_url' => 'Stranger things Season 3/Chapter 5 The Flayed.mp4',
                'created_at' => '2021-05-07 14:23:41',
                'updated_at' => '2021-05-07 14:23:41',
            ),
            31 => 
            array (
                'id' => 35,
                'video_url' => 'Stranger things Season 3/Chapter 6 E Pluribus Unum.mp4',
                'created_at' => '2021-05-07 14:24:25',
                'updated_at' => '2021-05-07 14:24:25',
            ),
            32 => 
            array (
                'id' => 36,
                'video_url' => 'Stranger things Season 3/Chapter 7 The Bite.mp4',
                'created_at' => '2021-05-07 14:25:35',
                'updated_at' => '2021-05-07 14:25:35',
            ),
            33 => 
            array (
                'id' => 37,
                'video_url' => 'Stranger things Season 3/Chapter 8 The Battle of Starcourt.mp4',
                'created_at' => '2021-05-07 14:27:22',
                'updated_at' => '2021-05-07 14:27:22',
            ),
            34 => 
            array (
                'id' => 38,
                'video_url' => 'Stranger Things Season 2/Episode 1 Mad Max.mp4',
                'created_at' => '2021-05-07 14:38:19',
                'updated_at' => '2021-05-07 14:38:19',
            ),
            35 => 
            array (
                'id' => 39,
                'video_url' => 'Stranger Things Season 2/Episode 2 Trick or Treat Freak.mp4',
                'created_at' => '2021-05-07 14:39:09',
                'updated_at' => '2021-05-07 14:39:09',
            ),
            36 => 
            array (
                'id' => 40,
                'video_url' => 'Stranger Things Season 2/Episode 3 The Pollywog.mp4',
                'created_at' => '2021-05-07 14:40:45',
                'updated_at' => '2021-05-07 14:40:45',
            ),
            37 => 
            array (
                'id' => 41,
                'video_url' => 'Stranger Things Season 2/Episode 4 Will the Wise.mp4',
                'created_at' => '2021-05-07 14:44:39',
                'updated_at' => '2021-05-07 14:44:39',
            ),
            38 => 
            array (
                'id' => 42,
                'video_url' => 'Stranger Things Season 2/Episode 5 Dig Dug.mp4',
                'created_at' => '2021-05-07 14:45:45',
                'updated_at' => '2021-05-07 14:45:45',
            ),
            39 => 
            array (
                'id' => 43,
                'video_url' => 'Stranger Things Season 2/Episode 6 The Spy.mp4',
                'created_at' => '2021-05-07 14:46:45',
                'updated_at' => '2021-05-07 14:46:45',
            ),
            40 => 
            array (
                'id' => 44,
                'video_url' => 'Stranger Things Season 2/Episode 7 The Lost Sister.mp4',
                'created_at' => '2021-05-07 14:47:28',
                'updated_at' => '2021-05-07 14:47:28',
            ),
            41 => 
            array (
                'id' => 45,
                'video_url' => 'Stranger Things Season 2/Episode 8 The Mind Flayer.mp4',
                'created_at' => '2021-05-07 14:50:13',
                'updated_at' => '2021-05-07 14:50:13',
            ),
            42 => 
            array (
                'id' => 46,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 1 We Only See Each Other at Weddings and Funerals.mp4',
                'created_at' => '2021-05-07 14:55:55',
                'updated_at' => '2021-05-07 14:55:55',
            ),
            43 => 
            array (
                'id' => 47,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 2 Run Boy Run.mp4',
                'created_at' => '2021-05-07 14:59:07',
                'updated_at' => '2021-05-07 14:59:07',
            ),
            44 => 
            array (
                'id' => 48,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 3 Extra Ordinary.mp4',
                'created_at' => '2021-05-07 15:00:25',
                'updated_at' => '2021-05-07 15:00:25',
            ),
            45 => 
            array (
                'id' => 49,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 4 Man on the Moon.mp4',
                'created_at' => '2021-05-07 15:01:10',
                'updated_at' => '2021-05-07 15:01:10',
            ),
            46 => 
            array (
                'id' => 50,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 5 Number Five.mp4',
                'created_at' => '2021-05-07 15:03:47',
                'updated_at' => '2021-05-07 15:03:47',
            ),
            47 => 
            array (
                'id' => 51,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 6 The Day That Wasn\'t.mp4',
                'created_at' => '2021-05-07 15:05:08',
                'updated_at' => '2021-05-07 15:05:08',
            ),
            48 => 
            array (
                'id' => 52,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 7 The Day That Was.mp4',
                'created_at' => '2021-05-07 15:06:36',
                'updated_at' => '2021-05-07 15:06:36',
            ),
            49 => 
            array (
                'id' => 53,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 8 I Heard a Rumor.mp4',
                'created_at' => '2021-05-07 15:07:29',
                'updated_at' => '2021-06-01 17:04:05',
            ),
            50 => 
            array (
                'id' => 54,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 9 Changes.mp4',
                'created_at' => '2021-05-07 15:08:13',
                'updated_at' => '2021-05-07 15:08:13',
            ),
            51 => 
            array (
                'id' => 55,
                'video_url' => 'The Umbrella Academy Season 1/Chapter 10 The White Violin.mp4',
                'created_at' => '2021-05-07 15:09:18',
                'updated_at' => '2021-05-07 15:09:18',
            ),
            52 => 
            array (
                'id' => 56,
                'video_url' => 'The Witcher/The Witcher Episode 1 The End\'s Beginning.mp4',
                'created_at' => '2021-05-07 15:20:56',
                'updated_at' => '2021-05-07 15:20:56',
            ),
            53 => 
            array (
                'id' => 57,
                'video_url' => 'The Witcher/The Witcher Episode 2 Four Marks.mp4',
                'created_at' => '2021-05-07 15:21:44',
                'updated_at' => '2021-05-07 15:21:44',
            ),
            54 => 
            array (
                'id' => 58,
                'video_url' => 'The Witcher/The Witcher Episode 3 Betrayer Moon.mp4',
                'created_at' => '2021-05-07 15:22:25',
                'updated_at' => '2021-05-07 15:22:25',
            ),
            55 => 
            array (
                'id' => 59,
                'video_url' => 'The Witcher/The Witcher Episode 4 Of Banquets, Bastards and Burials.mp4',
                'created_at' => '2021-05-07 15:23:50',
                'updated_at' => '2021-05-07 15:23:50',
            ),
            56 => 
            array (
                'id' => 60,
                'video_url' => 'The Witcher/The Witcher Episode 5 Bottled Appetites.mp4',
                'created_at' => '2021-05-07 15:24:29',
                'updated_at' => '2021-05-07 15:24:29',
            ),
            57 => 
            array (
                'id' => 61,
                'video_url' => 'The Witcher/The Witcher Episode 6 Rare Species.mp4',
                'created_at' => '2021-05-07 15:25:13',
                'updated_at' => '2021-05-07 15:25:13',
            ),
            58 => 
            array (
                'id' => 62,
                'video_url' => 'The Witcher/The Witcher Episode 7 Before a Fall.mp4',
                'created_at' => '2021-05-07 15:25:47',
                'updated_at' => '2021-05-07 15:25:47',
            ),
            59 => 
            array (
                'id' => 63,
                'video_url' => 'The Witcher/The Witcher Episode 8 Much More.mp4',
                'created_at' => '2021-05-07 15:26:46',
                'updated_at' => '2021-05-07 15:26:46',
            ),
            60 => 
            array (
                'id' => 64,
                'video_url' => 'Stranger Things Season 2/Episode 9 The Gate.mp4',
                'created_at' => '2021-05-07 15:29:17',
                'updated_at' => '2021-05-07 15:29:17',
            ),
            61 => 
            array (
                'id' => 65,
                'video_url' => 'Good omes/Chapter 1 In the Beginning.mp4',
                'created_at' => '2021-05-08 02:05:52',
                'updated_at' => '2021-05-08 02:08:18',
            ),
            62 => 
            array (
                'id' => 66,
                'video_url' => 'Good omes/Chapter 2 The Book.mp4',
                'created_at' => '2021-05-08 14:29:23',
                'updated_at' => '2021-05-08 14:29:23',
            ),
            63 => 
            array (
                'id' => 67,
                'video_url' => 'Good omes/Chapter 3 Hard Times.mp4',
                'created_at' => '2021-05-08 14:30:12',
                'updated_at' => '2021-05-08 14:30:12',
            ),
            64 => 
            array (
                'id' => 68,
                'video_url' => 'Good omes/Chapter 4 Saturday Morning Funtime.mp4',
                'created_at' => '2021-05-08 14:31:03',
                'updated_at' => '2021-05-08 14:31:03',
            ),
            65 => 
            array (
                'id' => 69,
                'video_url' => 'Good omes/Chapter 5 The Doomsday Option.mp4',
                'created_at' => '2021-05-08 14:31:44',
                'updated_at' => '2021-05-08 14:31:44',
            ),
            66 => 
            array (
                'id' => 70,
                'video_url' => 'Good omes/Chapter 6 The Very Last Day of the Rest of Their Lives.mp4',
                'created_at' => '2021-05-08 14:32:29',
                'updated_at' => '2021-05-08 14:32:29',
            ),
            67 => 
            array (
                'id' => 71,
            'video_url' => 'Zack Snayder\'s Justice League/Zack Snyder\'s Justice League (2021).mp4',
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            68 => 
            array (
                'id' => 72,
            'video_url' => 'Percy Jackson/Percy Jackson And The Olympians The Lightning Thief (2010) [1080p]/Percy Jackson And The Olympians The Lightning Thief 2010 1080p BrRip .mp4',
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            69 => 
            array (
                'id' => 73,
            'video_url' => 'Percy Jackson/Percy Jackson Sea of Monsters (2013) [1080p]/Percy Jackson Sea of Monsters 2013 1080p BluRay.mp4',
                'created_at' => '2021-06-02 13:17:36',
                'updated_at' => '2021-06-02 13:17:36',
            ),
            70 => 
            array (
                'id' => 74,
            'video_url' => 'Percy Jackson/Percy Jackson Sea of Monsters (2013) [1080p]/Percy Jackson Sea of Monsters 2013 1080p BluRay.mp4',
                'created_at' => '2021-06-02 13:18:13',
                'updated_at' => '2021-06-02 13:18:13',
            ),
            71 => 
            array (
                'id' => 75,
            'video_url' => 'Percy Jackson/Percy Jackson Sea of Monsters (2013) [1080p]/Percy Jackson Sea of Monsters 2013 1080p BluRay.mp4',
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            72 => 
            array (
                'id' => 76,
            'video_url' => 'Kung Fu Panda/Kung Fu Panda (2008)/Kung Fu Panda 2008 1080p BluRay .mp4',
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            73 => 
            array (
                'id' => 77,
            'video_url' => 'Kung Fu Panda/Kung Fu Panda 2 (2011)/Kung Fu Panda 2 2011 1080p BluRay.mp4',
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            74 => 
            array (
                'id' => 78,
            'video_url' => 'Inception (2010) [1080p]/Inception 2010 1080p BrRip.mp4',
                'created_at' => '2021-06-02 13:50:08',
                'updated_at' => '2021-06-02 13:50:08',
            ),
            75 => 
            array (
                'id' => 79,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 1 Right Back Where We Started.mp4',
                'created_at' => '2021-06-02 14:01:02',
                'updated_at' => '2021-06-02 14:01:02',
            ),
            76 => 
            array (
                'id' => 80,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 2 The Frankel Footage.mp4',
                'created_at' => '2021-06-02 14:12:22',
                'updated_at' => '2021-06-02 14:12:22',
            ),
            77 => 
            array (
                'id' => 81,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 3 The Swedish Job.mp4',
                'created_at' => '2021-06-02 14:13:02',
                'updated_at' => '2021-06-02 14:13:02',
            ),
            78 => 
            array (
                'id' => 82,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 4 The Majestic 12.mp4',
                'created_at' => '2021-06-02 14:13:58',
                'updated_at' => '2021-06-02 14:13:58',
            ),
            79 => 
            array (
                'id' => 83,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 5 Valhalla.mp4',
                'created_at' => '2021-06-02 14:14:49',
                'updated_at' => '2021-06-02 14:14:49',
            ),
            80 => 
            array (
                'id' => 84,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 6 A Light Supper.mp4',
                'created_at' => '2021-06-02 14:15:30',
                'updated_at' => '2021-06-02 14:15:30',
            ),
            81 => 
            array (
                'id' => 85,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 7 Öga for Öga.mp4',
                'created_at' => '2021-06-02 14:16:18',
                'updated_at' => '2021-06-02 14:16:18',
            ),
            82 => 
            array (
                'id' => 86,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 8 The Seven Stages.mp4',
                'created_at' => '2021-06-02 14:17:16',
                'updated_at' => '2021-06-02 14:17:16',
            ),
            83 => 
            array (
                'id' => 87,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 9 743.mp4',
                'created_at' => '2021-06-02 14:17:54',
                'updated_at' => '2021-06-02 14:17:54',
            ),
            84 => 
            array (
                'id' => 88,
                'video_url' => 'The Umbrella Academy Season 2/Chapter 10 The End of Something.mp4',
                'created_at' => '2021-06-02 14:18:46',
                'updated_at' => '2021-06-02 14:18:46',
            ),
            85 => 
            array (
                'id' => 89,
                'video_url' => 'Kingdom/Kingdom Season 1/Episode 1.mp4',
                'created_at' => '2021-06-02 14:46:35',
                'updated_at' => '2021-06-02 14:46:35',
            ),
            86 => 
            array (
                'id' => 90,
                'video_url' => 'Kingdom/Kingdom Season 1/Episode 2.mp4',
                'created_at' => '2021-06-02 14:49:24',
                'updated_at' => '2021-06-02 14:49:24',
            ),
            87 => 
            array (
                'id' => 91,
                'video_url' => 'Kingdom/Kingdom Season 1/Episode 3.mp4',
                'created_at' => '2021-06-02 14:50:46',
                'updated_at' => '2021-06-02 14:50:46',
            ),
            88 => 
            array (
                'id' => 92,
                'video_url' => 'Kingdom/Kingdom Season 1/Episode 3.mp4',
                'created_at' => '2021-06-02 14:51:41',
                'updated_at' => '2021-06-02 14:51:41',
            ),
            89 => 
            array (
                'id' => 93,
                'video_url' => 'Kingdom/Kingdom Season 1/Episode 4.mp4',
                'created_at' => '2021-06-02 14:52:41',
                'updated_at' => '2021-06-02 14:52:41',
            ),
            90 => 
            array (
                'id' => 94,
                'video_url' => 'Kingdom/Kingdom Season 1/Episode 5.mp4',
                'created_at' => '2021-06-02 14:53:27',
                'updated_at' => '2021-06-02 14:53:27',
            ),
            91 => 
            array (
                'id' => 95,
                'video_url' => 'Kingdom/Kingdom Season 1/Episode 6.mp4',
                'created_at' => '2021-06-02 14:53:59',
                'updated_at' => '2021-06-02 14:53:59',
            ),
            92 => 
            array (
                'id' => 96,
                'video_url' => 'Kingdom/Kingdom Season 2/e1.mp4',
                'created_at' => '2021-06-02 15:01:31',
                'updated_at' => '2021-06-02 15:01:31',
            ),
            93 => 
            array (
                'id' => 97,
                'video_url' => 'Kingdom/Kingdom Season 2/e2.mp4',
                'created_at' => '2021-06-02 15:04:53',
                'updated_at' => '2021-06-02 15:04:53',
            ),
            94 => 
            array (
                'id' => 98,
                'video_url' => 'Kingdom/Kingdom Season 2/e3.mp4',
                'created_at' => '2021-06-02 15:05:16',
                'updated_at' => '2021-06-02 15:05:16',
            ),
            95 => 
            array (
                'id' => 99,
                'video_url' => 'Kingdom/Kingdom Season 2/e4.mp4',
                'created_at' => '2021-06-02 15:06:03',
                'updated_at' => '2021-06-02 15:06:03',
            ),
            96 => 
            array (
                'id' => 100,
                'video_url' => 'Kingdom/Kingdom Season 2/e5.mp4',
                'created_at' => '2021-06-02 15:06:27',
                'updated_at' => '2021-06-02 15:06:27',
            ),
            97 => 
            array (
                'id' => 101,
                'video_url' => 'Kingdom/Kingdom Season 2/e6.mp4',
                'created_at' => '2021-06-02 15:06:55',
                'updated_at' => '2021-06-02 15:06:55',
            ),
            98 => 
            array (
                'id' => 102,
            'video_url' => 'Captain America/Captain America - The First Avenger (2011)/Captain America The First Avenger 1080p BrRip.mp4',
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            99 => 
            array (
                'id' => 103,
            'video_url' => 'Captain America/Captain America The Winter Soldier (2014) [1080p]/Captain America The Winter Soldier 2014 1080p BluRay.mp4',
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            100 => 
            array (
                'id' => 104,
            'video_url' => 'Captain America/Captain America Civil War (2016) [1080p] [YTS.AG]/Captain America Civil War 2016 1080p BluRay.mp4',
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            101 => 
            array (
                'id' => 105,
                'video_url' => '1 LẦN BỊ RẮN ĐUỔI - Truyện cổ tích - Chuyện cổ tích - Phim hoạt hình - Hoạt hình hay.mp4',
                'created_at' => '2021-06-05 07:02:35',
                'updated_at' => '2021-06-05 07:02:35',
            ),
        ));
        
        
    }
}