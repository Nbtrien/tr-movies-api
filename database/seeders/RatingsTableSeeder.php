<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ratings')->delete();
        
        \DB::table('ratings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'movie_id' => 30,
                'value' => 2,
                'created_at' => '2021-05-02 15:12:46',
                'updated_at' => '2021-05-02 15:31:13',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'movie_id' => 30,
                'value' => 7,
                'created_at' => '2021-05-02 15:31:39',
                'updated_at' => '2021-05-02 15:35:03',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'movie_id' => 8,
                'value' => 2,
                'created_at' => '2021-11-04 16:33:56',
                'updated_at' => '2022-03-31 14:58:34',
            ),
        ));
        
        
    }
}