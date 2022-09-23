<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('userviews')->delete();
        
        \DB::table('userviews')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'movie_id' => 24,
                'episode_id' => 9,
                'created_at' => '2021-06-01 03:35:01',
                'updated_at' => '2021-06-01 05:59:47',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'movie_id' => 13,
                'episode_id' => NULL,
                'created_at' => '2021-06-01 05:58:18',
                'updated_at' => '2021-06-01 05:58:18',
            ),
            2 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'movie_id' => 8,
                'episode_id' => 12,
                'created_at' => '2021-06-01 06:28:02',
                'updated_at' => '2021-11-04 16:34:17',
            ),
            3 => 
            array (
                'id' => 7,
                'user_id' => 2,
                'movie_id' => 22,
                'episode_id' => 36,
                'created_at' => '2021-06-01 06:29:51',
                'updated_at' => '2021-06-03 02:57:18',
            ),
            4 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'movie_id' => 23,
                'episode_id' => 26,
                'created_at' => '2021-06-01 16:52:52',
                'updated_at' => '2021-06-03 03:04:04',
            ),
            5 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'movie_id' => 6,
                'episode_id' => NULL,
                'created_at' => '2021-06-01 17:08:31',
                'updated_at' => '2021-06-01 17:08:31',
            ),
            6 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'movie_id' => 40,
                'episode_id' => NULL,
                'created_at' => '2021-06-02 13:50:23',
                'updated_at' => '2021-06-02 13:50:23',
            ),
            7 => 
            array (
                'id' => 16,
                'user_id' => 2,
                'movie_id' => 41,
                'episode_id' => 60,
                'created_at' => '2021-06-02 14:13:02',
                'updated_at' => '2021-06-02 14:18:51',
            ),
            8 => 
            array (
                'id' => 20,
                'user_id' => 3,
                'movie_id' => 8,
                'episode_id' => 2,
                'created_at' => '2021-06-03 03:10:49',
                'updated_at' => '2021-06-03 03:10:49',
            ),
            9 => 
            array (
                'id' => 22,
                'user_id' => 16,
                'movie_id' => 6,
                'episode_id' => NULL,
                'created_at' => '2021-07-01 13:30:23',
                'updated_at' => '2021-07-01 13:30:23',
            ),
            10 => 
            array (
                'id' => 24,
                'user_id' => 2,
                'movie_id' => 36,
                'episode_id' => NULL,
                'created_at' => '2021-07-05 01:12:16',
                'updated_at' => '2021-07-05 01:12:16',
            ),
            11 => 
            array (
                'id' => 25,
                'user_id' => 16,
                'movie_id' => 24,
                'episode_id' => 4,
                'created_at' => '2021-07-06 12:23:33',
                'updated_at' => '2021-07-06 12:23:33',
            ),
            12 => 
            array (
                'id' => 26,
                'user_id' => 16,
                'movie_id' => 45,
                'episode_id' => NULL,
                'created_at' => '2021-07-06 12:31:32',
                'updated_at' => '2021-07-06 12:31:32',
            ),
            13 => 
            array (
                'id' => 27,
                'user_id' => 16,
                'movie_id' => 14,
                'episode_id' => NULL,
                'created_at' => '2021-07-06 12:32:27',
                'updated_at' => '2021-07-06 12:32:27',
            ),
            14 => 
            array (
                'id' => 28,
                'user_id' => 16,
                'movie_id' => 23,
                'episode_id' => 29,
                'created_at' => '2021-07-06 12:32:56',
                'updated_at' => '2021-07-06 12:33:04',
            ),
            15 => 
            array (
                'id' => 29,
                'user_id' => 16,
                'movie_id' => 40,
                'episode_id' => NULL,
                'created_at' => '2021-08-13 02:07:50',
                'updated_at' => '2021-08-13 02:07:50',
            ),
            16 => 
            array (
                'id' => 30,
                'user_id' => 2,
                'movie_id' => 45,
                'episode_id' => NULL,
                'created_at' => '2021-08-13 02:12:25',
                'updated_at' => '2021-08-13 02:12:25',
            ),
            17 => 
            array (
                'id' => 31,
                'user_id' => 2,
                'movie_id' => 35,
                'episode_id' => NULL,
                'created_at' => '2021-08-13 02:12:47',
                'updated_at' => '2021-08-13 02:12:47',
            ),
            18 => 
            array (
                'id' => 32,
                'user_id' => 2,
                'movie_id' => 37,
                'episode_id' => NULL,
                'created_at' => '2021-11-04 16:08:14',
                'updated_at' => '2021-11-04 16:08:14',
            ),
        ));
        
        
    }
}