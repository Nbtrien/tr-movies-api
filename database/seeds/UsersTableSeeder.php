<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'abc',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'trien@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uYy1NPal7nq3KgkXbq98ee8D0ag4VHXLyu4DqWJ/z9.YBKUkWVE9.',
                'role_id' => 2,
                'remember_token' => 'XpWhbRWuytT3NjTz4yT6YvfWlqTmhP3pMrfEQvJFeQ0nN2AqLvpIoGQ8QrtR',
                'created_at' => '2021-04-16 16:27:24',
                'updated_at' => '2021-04-16 16:27:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'trien',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'trienbanguyen@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$06aJVJTcoQ.F2s8bEWb2euK4vSg2bLHoq3G54EMaV6w1cX.K2zcHG',
                'role_id' => 1,
                'remember_token' => 'EwOLzYKG5uVtFz8rC0E4xWbJm811YKi6YZlSN2rBgg04Maqbt1ampokVP6ak',
                'created_at' => '2021-04-16 16:27:38',
                'updated_at' => '2021-04-16 16:27:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ankechi',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'ankechi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PVmtzhV7s3EBmDlTGRVxxeCcbDN3QskwW6IWseEQzc6iEC.3jcDzS',
                'role_id' => 2,
                'remember_token' => 'Ui7o9OL387PRal8eFIGkGaIuKmtkns4WitVe8HAbXEBlMc8UUFR9HWRsQN6H',
                'created_at' => '2021-04-23 13:03:25',
                'updated_at' => '2021-04-23 13:03:25',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'test',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'test@gmai.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jS2GeunmxMMgYPkDDgskBO334SPqytEF/cdpVtFFr/OhvOK7u8.IG',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2021-04-23 16:57:09',
                'updated_at' => '2021-04-23 16:57:09',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'nbt',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'nbt@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qyB4syfI8JVRQIupLeHkzuoogaoJiCEoFGFY2IxOfJHRpo5nrS3v2',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2021-05-22 03:42:35',
                'updated_at' => '2021-05-22 03:42:35',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'nbt',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'ankechi123@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ofPnUmqaiYN2LoWKwdsCOetznoXxlI4wq2XJXjLBKIlh4a0ga5dha',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2021-05-22 04:38:04',
                'updated_at' => '2021-05-22 04:38:04',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'nguyen a',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'nguyena@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R7vagW6Nc0jsrj5WKEbCO.AW45J53aeyrSydVyWzwL5LX7a.oIZVS',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2021-05-22 05:40:53',
                'updated_at' => '2021-05-22 05:40:53',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'nguyen b',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'nguyenb@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rvIp9265UHOSHqDy5QZJ7O9xUA9taC3ln5hobjs.xeMNxstqs3SW6',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2021-05-22 05:47:41',
                'updated_at' => '2021-05-22 05:47:41',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'nguyen c',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'nguyenc@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8xBjz200hSxf7Kgb9GawjOi42U2O0r1u2oWovXdbtiJPSOxqOdV/S',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2021-05-22 05:49:03',
                'updated_at' => '2021-05-22 05:49:03',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'nguyen d',
                'google_id' => '',
                'avatar' => '',
                'avatar_original' => '',
                'email' => 'nguyend@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cFVmh7Za61DJCDCI8xTZxeQ0T77eiCleJx3vJJUd1kfU0bMfYlwYq',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2021-05-22 05:51:48',
                'updated_at' => '2021-05-22 05:51:48',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'nguyen e',
                'google_id' => NULL,
                'avatar' => NULL,
                'avatar_original' => NULL,
                'email' => 'nguyene@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oxx.18T0nFdbodOWj788f.toDkQEyoVLqYh4jXOwM6WLGpxnCJ/p6',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2021-05-25 14:55:00',
                'updated_at' => '2021-05-25 14:55:00',
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'Chi An',
                'google_id' => '110945250123273851307',
                'avatar' => 'https://lh3.googleusercontent.com/a/AATXAJyqLZYDujoZsudnfxnPBPOJczC0_5oEEaV5Syv5=s96-c',
                'avatar_original' => 'https://lh3.googleusercontent.com/a/AATXAJyqLZYDujoZsudnfxnPBPOJczC0_5oEEaV5Syv5=s96-c',
                'email' => 'nguyenanchi1919@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dhEJ7Zsw31bwPZdbjKV2Y.C75/hV2fa/.Kb9azEgcEkJcqncGFjzm',
                'role_id' => 2,
                'remember_token' => 'MsAscK8BOyz0dFEYmANeKMWXEeiBlWzkFVKrSESBx2uUrgev3zhfiNes5hgS',
                'created_at' => '2021-05-25 14:55:35',
                'updated_at' => '2021-05-25 14:55:35',
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'abc',
                'google_id' => NULL,
                'avatar' => NULL,
                'avatar_original' => NULL,
                'email' => 'a@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wQMygPL1yy.isElekJfE..rTI2j1eyo8FrVcxqua/t/Q3CrmBfCHC',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2022-07-27 06:17:03',
                'updated_at' => '2022-07-27 06:17:03',
            ),
        ));
        
        
    }
}