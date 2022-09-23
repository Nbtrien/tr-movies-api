<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'mỹ',
                'created_at' => '2021-04-18 07:07:59',
                'updated_at' => '2021-04-18 07:07:59',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'việt nam',
                'created_at' => '2021-04-18 07:08:32',
                'updated_at' => '2021-04-18 07:08:32',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'hàn quốc',
                'created_at' => '2021-04-18 14:54:20',
                'updated_at' => '2021-04-18 14:54:20',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'trung quốc',
                'created_at' => '2021-04-18 15:00:34',
                'updated_at' => '2021-04-18 15:00:34',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'nhật bản',
                'created_at' => '2021-04-19 01:52:40',
                'updated_at' => '2021-04-19 01:52:40',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'anh',
                'created_at' => '2021-04-21 11:37:24',
                'updated_at' => '2021-04-21 11:37:24',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'tây ban nha',
                'created_at' => '2021-04-21 11:37:53',
                'updated_at' => '2021-04-21 11:37:53',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'hồng kông',
                'created_at' => '2021-04-21 11:38:05',
                'updated_at' => '2021-04-21 11:38:05',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'úc',
                'created_at' => '2021-04-21 11:38:14',
                'updated_at' => '2021-04-21 11:38:14',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Canada',
                'created_at' => '2021-05-21 02:37:38',
                'updated_at' => '2021-05-21 02:37:38',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'Xứ Wales',
                'created_at' => '2021-05-21 02:52:57',
                'updated_at' => '2021-05-21 02:52:57',
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'Scotland',
                'created_at' => '2021-05-21 02:55:12',
                'updated_at' => '2021-05-21 02:55:12',
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'Israel',
                'created_at' => '2021-05-21 02:58:48',
                'updated_at' => '2021-05-21 02:58:48',
            ),
        ));
        
        
    }
}