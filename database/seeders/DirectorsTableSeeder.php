<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('directors')->delete();
        
        \DB::table('directors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Anthony Russo',
                'birthday' => '1970-02-03',
                'gender' => 'Nam',
            'story' => '<p><strong>Anthony Russo</strong> và <strong>Joseph V.</strong> "<strong>Joe</strong>" <strong>Russo</strong> (được biết đến với tên chung là <strong>Anh em nhà Russo</strong>) là bộ đôi đạo diễn điện ảnh và truyền hình người Mỹ. Bộ đôi thường thực hiện các dự án của họ cùng nhau, và ngoài vai trò đạo diễn, cả hai cũng thường tham gia các dự án với tư cách nhà sản xuất, biên kịch, diễn viên hay nhà dựng phim.</p>',
                'country_id' => 2,
                'image_id' => 160,
                'created_at' => '2021-05-21 03:37:05',
                'updated_at' => '2021-05-21 03:37:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Matt Duffer',
                'birthday' => '1984-02-02',
                'gender' => 'Nam',
            'story' => '<p>Matt Duffer và anh trai sinh đôi Ross Duffer (sinh năm 1984), được biết đến với tên chuyên nghiệp là Anh em nhà Duffer, là hai anh em sinh đôi người Mỹ viết và chỉ đạo các chương trình khoa học viễn tưởng và kinh dị cho phim và truyền hình. Họ được biết đến nhiều nhất với phim kinh dị Hidden 2015 và loạt phim kinh dị khoa học viễn tưởng Netflix 2016 Stranger Things. Họ cũng đã viết các tập cho Wayward Pines.</p>',
                'country_id' => 2,
                'image_id' => 161,
                'created_at' => '2021-05-21 03:57:12',
                'updated_at' => '2021-05-21 03:57:12',
            ),
        ));
        
        
    }
}