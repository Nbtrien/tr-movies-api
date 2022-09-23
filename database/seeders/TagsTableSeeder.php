<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'marvel',
                'created_at' => '2021-04-22 17:08:25',
                'updated_at' => '2021-04-22 17:08:25',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'dc',
                'created_at' => '2021-04-22 17:11:45',
                'updated_at' => '2021-04-22 17:11:45',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'siêu anh hùng',
                'created_at' => '2021-04-22 17:12:31',
                'updated_at' => '2021-04-22 17:12:31',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'netflix',
                'created_at' => '2021-04-26 15:35:08',
                'updated_at' => '2021-04-26 15:35:08',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'strangerthings',
                'created_at' => '2021-04-29 15:44:50',
                'updated_at' => '2021-04-29 15:44:50',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'harry potter',
                'created_at' => '2021-05-01 13:47:32',
                'updated_at' => '2021-05-01 13:47:32',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'phù thủy',
                'created_at' => '2021-05-01 13:47:41',
                'updated_at' => '2021-05-01 13:47:41',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'lord of the rings',
                'created_at' => '2021-05-01 14:26:06',
                'updated_at' => '2021-05-01 14:26:06',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'J. R. R. Tolkien',
                'created_at' => '2021-05-01 14:26:12',
                'updated_at' => '2021-05-01 14:26:12',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'the hobbit',
                'created_at' => '2021-05-01 14:26:20',
                'updated_at' => '2021-05-01 14:26:20',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'avenger',
                'created_at' => '2021-05-01 14:37:48',
                'updated_at' => '2021-05-01 14:37:48',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'thor',
                'created_at' => '2021-05-01 14:37:55',
                'updated_at' => '2021-05-01 14:37:55',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'captain america',
                'created_at' => '2021-05-01 14:38:06',
                'updated_at' => '2021-05-01 14:38:06',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'iron man',
                'created_at' => '2021-05-01 14:38:15',
                'updated_at' => '2021-05-01 14:38:15',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'percy jackson',
                'created_at' => '2021-06-02 13:12:17',
                'updated_at' => '2021-06-02 13:12:17',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'god',
                'created_at' => '2021-06-02 13:12:30',
                'updated_at' => '2021-06-02 13:12:30',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'kung fu',
                'created_at' => '2021-06-02 13:22:20',
                'updated_at' => '2021-06-02 13:22:20',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'kung fu panda',
                'created_at' => '2021-06-02 13:22:29',
                'updated_at' => '2021-06-02 13:22:29',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'panda',
                'created_at' => '2021-06-02 13:22:36',
                'updated_at' => '2021-06-02 13:22:36',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'umbrella academy',
                'created_at' => '2021-06-02 13:57:01',
                'updated_at' => '2021-06-02 13:57:01',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'zombie',
                'created_at' => '2021-06-02 14:30:51',
                'updated_at' => '2021-06-02 14:30:51',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'đội trưởng mỹ',
                'created_at' => '2021-06-02 15:15:57',
                'updated_at' => '2021-06-02 15:15:57',
            ),
        ));
        
        
    }
}