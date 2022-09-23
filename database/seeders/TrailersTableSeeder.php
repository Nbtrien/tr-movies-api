<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrailersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trailers')->delete();
        
        \DB::table('trailers')->insert(array (
            0 => 
            array (
                'id' => 8,
                'trailer_url' => 'Avengers/Trailers/Marvel Studios\' Avengers- Endgame - Official Trailer.mp4',
                'created_at' => '2021-04-20 16:08:20',
                'updated_at' => '2021-05-06 14:56:01',
            ),
            1 => 
            array (
                'id' => 10,
                'trailer_url' => 'Stranger things Season 3/Trailers/Stranger Things Season 3 - Official Trailer.mp4',
                'created_at' => '2021-04-20 17:26:57',
                'updated_at' => '2021-05-07 14:17:53',
            ),
            2 => 
            array (
                'id' => 11,
                'trailer_url' => 'https://www.googleapis.com/drive/v3/files/1ga6H1hn1kXvMzd_sYi7enre_MccUqiqz?alt=media&key=AIzaSyBgkNpReXPftVWToqNXL4PoyAM563zgCIw',
                'created_at' => '2021-04-20 17:32:18',
                'updated_at' => '2021-04-20 17:32:18',
            ),
            3 => 
            array (
                'id' => 12,
                'trailer_url' => 'Good omes/Good Omens - Official Trailer - Amazon Original.mp4',
                'created_at' => '2021-04-21 14:33:48',
                'updated_at' => '2021-05-08 14:24:49',
            ),
            4 => 
            array (
                'id' => 13,
                'trailer_url' => 'https://www.googleapis.com/drive/v3/files/1IKBy9hQNTyH-pqTp2cccuekevXie98mE?alt=media&key=AIzaSyBgkNpReXPftVWToqNXL4PoyAM563zgCIw',
                'created_at' => '2021-04-21 14:46:37',
                'updated_at' => '2021-04-21 14:46:37',
            ),
            5 => 
            array (
                'id' => 14,
                'trailer_url' => 'https://www.googleapis.com/drive/v3/files/1iA_qyRxMZMRsjMl_On9XCtryYjeEN9lG?alt=media&key=AIzaSyBgkNpReXPftVWToqNXL4PoyAM563zgCIw',
                'created_at' => '2021-04-21 14:51:11',
                'updated_at' => '2021-04-21 14:51:11',
            ),
            6 => 
            array (
                'id' => 15,
                'trailer_url' => 'Avengers/Trailers/Marvel Studios\' Avengers- Infinity War Official Trailer.mp4',
                'created_at' => '2021-04-21 14:58:44',
                'updated_at' => '2021-05-06 14:53:53',
            ),
            7 => 
            array (
                'id' => 16,
            'trailer_url' => 'Avengers/Trailers/Marvel\'s -Avengers- Age of Ultron- - Teaser Trailer (OFFICIAL).mp4',
                'created_at' => '2021-04-21 15:09:51',
                'updated_at' => '2021-05-06 13:14:24',
            ),
            8 => 
            array (
                'id' => 17,
            'trailer_url' => 'Avengers/Trailers/Marvel\'s The Avengers- Trailer (OFFICIAL).mp4',
                'created_at' => '2021-04-21 15:22:10',
                'updated_at' => '2021-05-06 14:52:40',
            ),
            9 => 
            array (
                'id' => 18,
            'trailer_url' => 'The Lord of the Rings/Trailers/The Lord of the Rings- The Fellowship of the Ring Official Trailer - (2001) HD.mp4',
                'created_at' => '2021-04-21 15:34:47',
                'updated_at' => '2021-05-07 11:53:38',
            ),
            10 => 
            array (
                'id' => 19,
            'trailer_url' => 'The Lord of the Rings/Trailers/The Lord of the Rings- The Two Towers (2002) Official Trailer.mp4',
                'created_at' => '2021-04-21 15:38:00',
                'updated_at' => '2021-05-07 11:55:48',
            ),
            11 => 
            array (
                'id' => 20,
            'trailer_url' => 'The Lord of the Rings/Trailers/The Lord of the Rings- The Return of the King Official Trailer - (2003) HD.mp4',
                'created_at' => '2021-04-21 15:56:13',
                'updated_at' => '2021-05-07 11:56:59',
            ),
            12 => 
            array (
                'id' => 21,
            'trailer_url' => 'The Hobbit/Trailers/The Hobbit Official Trailer  - Lord of the Rings Movie (2012) HD.mp4',
                'created_at' => '2021-04-21 16:06:25',
                'updated_at' => '2021-05-07 13:20:46',
            ),
            13 => 
            array (
                'id' => 22,
                'trailer_url' => 'The Hobbit/Trailers/The Hobbit- The Desolation of Smaug - Official Teaser Trailer [HD].mp4',
                'created_at' => '2021-04-21 16:13:03',
                'updated_at' => '2021-05-07 13:24:33',
            ),
            14 => 
            array (
                'id' => 23,
                'trailer_url' => 'The Hobbit/Trailers/The Hobbit- The Battle of the Five Armies - Official Teaser Trailer [HD].mp4',
                'created_at' => '2021-04-21 17:05:29',
                'updated_at' => '2021-05-07 13:25:38',
            ),
            15 => 
            array (
                'id' => 24,
                'trailer_url' => 'The Witcher/Trailers/THE WITCHER - MAIN TRAILER - NETFLIX.mp4',
                'created_at' => '2021-04-26 02:57:57',
                'updated_at' => '2021-05-07 15:13:09',
            ),
            16 => 
            array (
                'id' => 25,
                'trailer_url' => 'The Umbrella Academy Season 1/The Umbrella Academy - Official Trailer - Netflix.mp4',
                'created_at' => '2021-04-26 15:42:45',
                'updated_at' => '2021-05-07 14:57:47',
            ),
            17 => 
            array (
                'id' => 26,
                'trailer_url' => 'Stranger Things Season 1/Trailers/Stranger Things Season 1 Trailer 1 - Rotten Tomatoes TV.mp4',
                'created_at' => '2021-04-29 15:22:51',
                'updated_at' => '2021-05-07 13:27:34',
            ),
            18 => 
            array (
                'id' => 27,
            'trailer_url' => 'Harry Potter/Trailers/Harry Potter and the Sorcerer\'s Stone (2001) Official Trailer - Daniel Radcliffe Movie HD.mp4',
                'created_at' => '2021-05-01 13:38:40',
                'updated_at' => '2021-05-07 12:46:25',
            ),
            19 => 
            array (
                'id' => 28,
            'trailer_url' => 'Harry Potter/Trailers/Harry Potter and the Chamber of Secrets (2002) Official Trailer Daniel Radcliffe Movie HD.mp4',
                'created_at' => '2021-05-01 13:47:12',
                'updated_at' => '2021-05-07 12:48:17',
            ),
            20 => 
            array (
                'id' => 29,
            'trailer_url' => 'Harry Potter/Trailers/Harry Potter and the Prisoner of Azkaban Official Trailer - (2004) HD.mp4',
                'created_at' => '2021-05-01 13:53:29',
                'updated_at' => '2021-05-07 12:49:47',
            ),
            21 => 
            array (
                'id' => 30,
            'trailer_url' => 'Harry Potter/Trailers/Harry Potter and the Goblet of Fire (2005) Official Trailer - Daniel Radcliffe Movie HD.mp4',
                'created_at' => '2021-05-01 14:00:54',
                'updated_at' => '2021-05-07 13:11:11',
            ),
            22 => 
            array (
                'id' => 31,
            'trailer_url' => 'Harry Potter/Trailers/Harry Potter and the Order of the Phoenix (2007) Official Trailer - Daniel Radcliffe Movie HD.mp4',
                'created_at' => '2021-05-01 14:05:38',
                'updated_at' => '2021-05-07 13:12:32',
            ),
            23 => 
            array (
                'id' => 32,
            'trailer_url' => 'Harry Potter/Trailers/Harry Potter and the Half Blood Prince (2009) Official Trailer - Daniel Radcliffe Movie HD.mp4',
                'created_at' => '2021-05-01 14:10:46',
                'updated_at' => '2021-05-07 12:51:20',
            ),
            24 => 
            array (
                'id' => 33,
            'trailer_url' => 'Harry Potter/Trailers/Harry Potter and the Deathly Hallows- Part 1 Official Trailer  - (2010) HD.mp4',
                'created_at' => '2021-05-01 14:15:09',
                'updated_at' => '2021-05-07 13:13:59',
            ),
            25 => 
            array (
                'id' => 34,
                'trailer_url' => 'Harry Potter/Trailers/Harry Potter and the Deathly Hallows - Part 2- Trailer 1.mp4',
                'created_at' => '2021-05-01 14:21:25',
                'updated_at' => '2021-05-07 13:15:02',
            ),
            26 => 
            array (
                'id' => 37,
                'trailer_url' => 'Stranger Things Season 2/Trailers/Stranger Things 2 - Official Final Trailer - Netflix.mp4',
                'created_at' => '2021-05-07 14:35:02',
                'updated_at' => '2021-05-07 14:35:02',
            ),
            27 => 
            array (
                'id' => 38,
                'trailer_url' => 'Zack Snayder\'s Justice League/Zack Snyder\'s Justice League - Official Trailer - HBO Max.mp4',
                'created_at' => '2021-05-10 12:18:02',
                'updated_at' => '2021-05-10 12:18:02',
            ),
            28 => 
            array (
                'id' => 39,
            'trailer_url' => 'Percy Jackson/Percy Jackson And The Olympians The Lightning Thief (2010) [1080p]/Percy Jackson & the Olympians- The Lightning Thief HD Movie Trailer.mp4',
                'created_at' => '2021-06-02 13:12:04',
                'updated_at' => '2021-06-02 13:12:04',
            ),
            29 => 
            array (
                'id' => 40,
            'trailer_url' => 'Percy Jackson/Percy Jackson Sea of Monsters (2013) [1080p]/Percy Jackson- Sea of Monsters Official Trailer  (2013).mp4',
                'created_at' => '2021-06-02 13:17:36',
                'updated_at' => '2021-06-02 13:17:36',
            ),
            30 => 
            array (
                'id' => 41,
            'trailer_url' => 'Percy Jackson/Percy Jackson Sea of Monsters (2013) [1080p]/Percy Jackson- Sea of Monsters Official Trailer  (2013).mp4',
                'created_at' => '2021-06-02 13:18:13',
                'updated_at' => '2021-06-02 13:18:13',
            ),
            31 => 
            array (
                'id' => 42,
            'trailer_url' => 'Percy Jackson/Percy Jackson Sea of Monsters (2013) [1080p]/Percy Jackson- Sea of Monsters Official Trailer  (2013).mp4',
                'created_at' => '2021-06-02 13:18:54',
                'updated_at' => '2021-06-02 13:18:54',
            ),
            32 => 
            array (
                'id' => 43,
            'trailer_url' => 'Kung Fu Panda/Kung Fu Panda (2008)/Kung Fu Panda - Official Trailer 1 [HD].mp4',
                'created_at' => '2021-06-02 13:38:31',
                'updated_at' => '2021-06-02 13:38:31',
            ),
            33 => 
            array (
                'id' => 44,
            'trailer_url' => 'Kung Fu Panda/Kung Fu Panda 2 (2011)/Kung Fu Panda 2 - Official Trailer.mp4',
                'created_at' => '2021-06-02 13:42:48',
                'updated_at' => '2021-06-02 13:42:48',
            ),
            34 => 
            array (
                'id' => 45,
            'trailer_url' => 'Inception (2010) [1080p]/Inception (2010) Official Trailer.mp4',
                'created_at' => '2021-06-02 13:50:08',
                'updated_at' => '2021-06-02 13:50:08',
            ),
            35 => 
            array (
                'id' => 46,
                'trailer_url' => 'The Umbrella Academy Season 2/The Umbrella Academy Season 2 - Official Trailer - Netflix.mp4',
                'created_at' => '2021-06-02 13:56:29',
                'updated_at' => '2021-06-02 13:56:29',
            ),
            36 => 
            array (
                'id' => 47,
                'trailer_url' => 'Kingdom/Kingdom Season 1/Kingdom - Official Trailer [HD] - Netflix.mp4',
                'created_at' => '2021-06-02 14:30:10',
                'updated_at' => '2021-06-02 14:30:10',
            ),
            37 => 
            array (
                'id' => 48,
                'trailer_url' => 'Kingdom/Kingdom Season 1/Kingdom - Official Trailer [HD] - Netflix.mp4',
                'created_at' => '2021-06-02 14:30:51',
                'updated_at' => '2021-06-02 14:30:51',
            ),
            38 => 
            array (
                'id' => 49,
                'trailer_url' => 'Kingdom/Kingdom Season 1/Kingdom - Official Trailer [HD] - Netflix.mp4',
                'created_at' => '2021-06-02 14:31:21',
                'updated_at' => '2021-06-02 14:31:21',
            ),
            39 => 
            array (
                'id' => 50,
                'trailer_url' => 'Kingdom/Kingdom Season 2/Kingdom Season 2 - Main Trailer - Netflix.mp4',
                'created_at' => '2021-06-02 14:34:28',
                'updated_at' => '2021-06-02 14:34:28',
            ),
            40 => 
            array (
                'id' => 51,
            'trailer_url' => 'Captain America/Captain America - The First Avenger (2011)/Captain America- The First Avenger - Trailer.mp4',
                'created_at' => '2021-06-02 15:18:45',
                'updated_at' => '2021-06-02 15:18:45',
            ),
            41 => 
            array (
                'id' => 52,
            'trailer_url' => 'Captain America/Captain America The Winter Soldier (2014) [1080p]/Marvel\'s Captain America- The Winter Soldier - Trailer 2 (OFFICIAL).mp4',
                'created_at' => '2021-06-02 15:23:32',
                'updated_at' => '2021-06-02 15:23:32',
            ),
            42 => 
            array (
                'id' => 53,
            'trailer_url' => 'Captain America/Captain America Civil War (2016) [1080p] [YTS.AG]/Marvel\'s Captain America- Civil War - Trailer 2.mp4',
                'created_at' => '2021-06-02 15:26:33',
                'updated_at' => '2021-06-02 15:26:33',
            ),
            43 => 
            array (
                'id' => 54,
                'trailer_url' => '1 LẦN BỊ RẮN ĐUỔI - Truyện cổ tích - Chuyện cổ tích - Phim hoạt hình - Hoạt hình hay.mp4',
                'created_at' => '2021-06-05 07:02:35',
                'updated_at' => '2021-06-05 07:02:35',
            ),
        ));
        
        
    }
}