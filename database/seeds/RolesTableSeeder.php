<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2021-04-16 23:26:02',
                'updated_at' => '2021-04-16 23:26:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'created_at' => '2021-04-16 23:26:02',
                'updated_at' => '2021-04-16 23:26:02',
            ),
        ));
        
        
    }
}