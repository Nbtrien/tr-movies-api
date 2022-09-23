<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('series')->delete();
        
        \DB::table('series')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'biệt đội siêu anh hùng',
                'created_at' => '2021-05-08 05:51:54',
                'updated_at' => '2021-05-08 06:33:12',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'stranger things',
                'created_at' => '2021-05-08 13:54:24',
                'updated_at' => '2021-05-08 13:54:24',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'harry potter',
                'created_at' => '2021-05-08 14:21:00',
                'updated_at' => '2021-05-08 14:21:00',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'the lord of the rings',
                'created_at' => '2021-05-08 14:21:58',
                'updated_at' => '2021-05-08 14:21:58',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'the hobbit',
                'created_at' => '2021-05-08 14:22:20',
                'updated_at' => '2021-05-08 14:22:20',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Percy Jackson',
                'created_at' => '2021-06-02 13:13:43',
                'updated_at' => '2021-06-02 13:13:43',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'kung fu panda',
                'created_at' => '2021-06-02 13:38:46',
                'updated_at' => '2021-06-02 13:38:46',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'the umbrella academy',
                'created_at' => '2021-06-02 13:56:47',
                'updated_at' => '2021-06-02 13:56:47',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Captain America',
                'created_at' => '2021-06-02 15:27:12',
                'updated_at' => '2021-06-02 15:27:12',
            ),
        ));
        
        
    }
}