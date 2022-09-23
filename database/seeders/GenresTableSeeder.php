<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'hành động',
                'image_id' => 138,
                'created_at' => '2021-04-18 06:38:45',
                'updated_at' => '2021-05-19 13:26:12',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'hài hước',
                'image_id' => 139,
                'created_at' => '2021-04-18 06:50:21',
                'updated_at' => '2021-05-19 13:27:19',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'tình cảm',
                'image_id' => 140,
                'created_at' => '2021-04-18 06:57:50',
                'updated_at' => '2021-05-19 13:27:34',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'viễn tưởng',
                'image_id' => 141,
                'created_at' => '2021-04-18 14:53:06',
                'updated_at' => '2021-05-19 13:27:49',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'võ thuật',
                'image_id' => 148,
                'created_at' => '2021-04-18 15:00:54',
                'updated_at' => '2021-05-19 13:31:59',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'chiếu rạp',
                'image_id' => 142,
                'created_at' => '2021-04-21 11:34:18',
                'updated_at' => '2021-05-19 13:28:10',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'hoạt hình',
                'image_id' => 137,
                'created_at' => '2021-04-21 11:35:26',
                'updated_at' => '2021-05-19 13:14:40',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'kinh dị',
                'image_id' => 143,
                'created_at' => '2021-04-21 11:36:03',
                'updated_at' => '2021-05-19 13:28:25',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'chiến tranh',
                'image_id' => 144,
                'created_at' => '2021-04-21 11:36:13',
                'updated_at' => '2021-05-19 13:28:41',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'tâm lý',
                'image_id' => 147,
                'created_at' => '2021-04-21 11:36:24',
                'updated_at' => '2021-05-19 13:31:27',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'phiêu lưu',
                'image_id' => 145,
                'created_at' => '2021-04-21 11:36:33',
                'updated_at' => '2021-05-19 13:29:20',
            ),
            11 => 
            array (
                'id' => 17,
                'name' => 'hình sự',
                'image_id' => 146,
                'created_at' => '2021-04-21 11:37:11',
                'updated_at' => '2021-05-19 13:29:33',
            ),
            12 => 
            array (
                'id' => 18,
                'name' => 'trinh thám',
                'image_id' => 149,
                'created_at' => '2021-05-19 13:39:08',
                'updated_at' => '2021-05-19 13:39:08',
            ),
        ));
        
        
    }
}