<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'movie_id' => 22,
                'parent_id' => NULL,
                'content' => 'The Witcher được chuyển thể từ bộ tiểu thuyết nổi tiếng của nhà văn Ba Lan Andrzej Sapkowski',
                'created_at' => '2021-05-22 16:16:00',
                'updated_at' => '2021-05-22 16:16:00',
            ),
            1 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'movie_id' => 6,
                'parent_id' => NULL,
                'content' => 'Sau sự kiện hủy diệt tàn khốc, vũ trụ chìm trong cảnh hoang tàn. Với sự trợ giúp của những đồng minh còn sống sót, biệt đội siêu anh hùng Avengers tập hợp một lần nữa để đảo ngược hành động của Thanos và khôi phục lại trật tự của vũ trụ.',
                'created_at' => '2021-05-22 16:20:47',
                'updated_at' => '2021-05-22 16:20:47',
            ),
            2 => 
            array (
                'id' => 10,
                'user_id' => 3,
                'movie_id' => 6,
                'parent_id' => NULL,
                'content' => 'Xứng đáng là siêu phẩm khép lại hành trình 10 năm của Avengers và cả phrase 3 của MCU',
                'created_at' => '2021-05-23 04:52:02',
                'updated_at' => '2021-05-23 04:52:02',
            ),
            3 => 
            array (
                'id' => 11,
                'user_id' => 2,
                'movie_id' => 6,
                'parent_id' => NULL,
                'content' => 'Phim rất hay, rất cảm động.',
                'created_at' => '2021-05-23 05:36:41',
                'updated_at' => '2021-05-23 05:36:41',
            ),
            4 => 
            array (
                'id' => 12,
                'user_id' => 2,
                'movie_id' => 6,
                'parent_id' => NULL,
                'content' => 'Rất hay , tiếc là Iron Man Hi Sinh :( , làm lây xúc động lòng người .',
                    'created_at' => '2021-05-23 05:39:49',
                    'updated_at' => '2021-05-23 05:39:49',
                ),
                5 => 
                array (
                    'id' => 13,
                    'user_id' => 2,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'Phim rất hay đúng là bộ phim siêu phẩm nhất năm 2019',
                    'created_at' => '2021-05-23 05:40:37',
                    'updated_at' => '2021-05-23 05:40:37',
                ),
                6 => 
                array (
                    'id' => 14,
                    'user_id' => 2,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'Bình thường, thủ điểm bằng dàn diễn viên, nội dung tẻ nhạt.',
                    'created_at' => '2021-05-23 06:18:04',
                    'updated_at' => '2021-05-23 06:18:04',
                ),
                7 => 
                array (
                    'id' => 15,
                    'user_id' => 2,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'Cái kết quá tuyệt vời cho 1 series phim xuất sắc nhất',
                    'created_at' => '2021-05-23 06:19:50',
                    'updated_at' => '2021-05-23 06:19:50',
                ),
                8 => 
                array (
                    'id' => 16,
                    'user_id' => 3,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'Phim ăn theo hào quang của những tập trước, nội dung nhàm chán ko mới mẻ lặp đi lặp lại.',
                    'created_at' => '2021-05-23 13:30:28',
                    'updated_at' => '2021-05-23 13:30:28',
                ),
                9 => 
                array (
                    'id' => 17,
                    'user_id' => 10,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'Phim giải trí.
Tuy nhiên, 1 số tình tiết chưa thật sự được đẩy tới.',
                    'created_at' => '2021-05-23 13:38:28',
                    'updated_at' => '2021-05-23 13:38:28',
                ),
                10 => 
                array (
                    'id' => 18,
                    'user_id' => 11,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'Phim giống như roller coaster, đưa bạn đến với mọi góc độ cảm xúc: Phấn khích, cảm động, sâu lắng, bùng nổ. Đích đến của con tàu được gọi là Hạnh phúc',
                    'created_at' => '2021-05-23 13:40:11',
                    'updated_at' => '2021-05-23 13:40:11',
                ),
                11 => 
                array (
                    'id' => 19,
                    'user_id' => 3,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'Một lời chào thoả mãn cho một câu chuyện bắt đầu từ cái mùa hè điên khùng 2008 ấy. Những tiếng cười, những giọt nước mắt, những tràng pháo tay hay mấy tiếng hò hét trong rạp chiếu là câu trả lời cho tất cả. Tạm biệt ai đó và đón chào ai đó.',
                    'created_at' => '2021-05-23 14:07:22',
                    'updated_at' => '2021-05-23 14:07:22',
                ),
                12 => 
                array (
                    'id' => 20,
                    'user_id' => 2,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'Đây là bộ phim siêu anh hùng nhiều cảm xúc nhất mà mình được xem vì dành nhiều đất diễn cho các diễn viên nổi tiếng thể hiện khả năng diễn xuất của mình. Chỉ tiếc còn nhiều siêu anh hùng mình thích chỉ xuất hiện lúc cuối phim. Thanks for all',
                    'created_at' => '2021-05-24 15:58:08',
                    'updated_at' => '2021-05-24 15:58:08',
                ),
                13 => 
                array (
                    'id' => 22,
                    'user_id' => 2,
                    'movie_id' => 6,
                    'parent_id' => NULL,
                    'content' => 'hay',
                    'created_at' => '2021-06-01 17:08:53',
                    'updated_at' => '2021-06-01 17:08:53',
                ),
                14 => 
                array (
                    'id' => 23,
                    'user_id' => 10,
                    'movie_id' => 8,
                    'parent_id' => NULL,
                    'content' => 'Ss3 Will đóng đơ thật sự nhìn cứ sao sao, giận vui gì cũng 1 kiểu mặt, t nghĩ không chừng dv ngoài đời bị bệnh nghệ sĩ nên cách diễn luôn muốn góc đẹp cho mặt mình',
                    'created_at' => '2021-06-03 03:09:56',
                    'updated_at' => '2021-06-03 03:09:56',
                ),
                15 => 
                array (
                    'id' => 24,
                    'user_id' => 10,
                    'movie_id' => 8,
                    'parent_id' => NULL,
                    'content' => 'Mình nghĩ là nên đổi tên film thì đúng hơn
Vì mấy phần sau có thằng nào mất tích nữa đâu :>
Với lại film đâu xoay quanh mỗi cậu bé đấy =))',
                'created_at' => '2021-06-03 03:10:32',
                'updated_at' => '2021-06-03 03:10:32',
            ),
            16 => 
            array (
                'id' => 25,
                'user_id' => 3,
                'movie_id' => 8,
                'parent_id' => NULL,
                'content' => 'Mình đã xem hết ss1 và drop luôn tại đó. Đọc cmt thấy mọi người đánh giá là ss tốt nhất nhưng mình lại thấy nó làm chưa tới.',
                'created_at' => '2021-06-03 03:11:35',
                'updated_at' => '2021-06-03 03:11:35',
            ),
            17 => 
            array (
                'id' => 26,
                'user_id' => 3,
                'movie_id' => 8,
                'parent_id' => NULL,
                'content' => 'Hôm nay rất tình cỡ biết đến bộ phim, thấy mn review hay quá nên xem thử, quá thật rất đáng để xem 😉',
                'created_at' => '2021-06-03 03:13:08',
                'updated_at' => '2021-06-03 03:13:08',
            ),
            18 => 
            array (
                'id' => 27,
                'user_id' => 2,
                'movie_id' => 8,
                'parent_id' => NULL,
                'content' => 'Việc brenner còn sống có thể xảy ra giống mấy bộ viễn tưởng í ạ kiểu người đứng đầu thì luôn có nhiều hơn 1 bản thể có thể là nhân bản vô tính hay sao đó 😛',
                'created_at' => '2021-06-03 03:14:45',
                'updated_at' => '2021-06-03 03:14:45',
            ),
            19 => 
            array (
                'id' => 28,
                'user_id' => 2,
                'movie_id' => 8,
                'parent_id' => NULL,
                'content' => 'hsy',
                'created_at' => '2021-06-04 03:07:14',
                'updated_at' => '2021-06-04 03:07:14',
            ),
            20 => 
            array (
                'id' => 29,
                'user_id' => 2,
                'movie_id' => 8,
                'parent_id' => NULL,
                'content' => 'blaaa',
                'created_at' => '2021-06-04 03:21:18',
                'updated_at' => '2021-06-04 03:21:18',
            ),
            21 => 
            array (
                'id' => 30,
                'user_id' => 16,
                'movie_id' => 24,
                'parent_id' => NULL,
                'content' => 'hay',
                'created_at' => '2021-07-06 12:24:23',
                'updated_at' => '2021-07-06 12:24:23',
            ),
            22 => 
            array (
                'id' => 31,
                'user_id' => 16,
                'movie_id' => 14,
                'parent_id' => NULL,
                'content' => 'hay',
                'created_at' => '2021-07-06 12:32:45',
                'updated_at' => '2021-07-06 12:32:45',
            ),
            23 => 
            array (
                'id' => 32,
                'user_id' => 2,
                'movie_id' => 13,
                'parent_id' => NULL,
                'content' => 'hay',
                'created_at' => '2021-07-07 02:13:19',
                'updated_at' => '2021-07-07 02:13:19',
            ),
            24 => 
            array (
                'id' => 33,
                'user_id' => 2,
                'movie_id' => 6,
                'parent_id' => 9,
                'content' => 'replyyy',
                'created_at' => '2022-04-05 15:16:57',
                'updated_at' => '2022-04-05 15:16:57',
            ),
            25 => 
            array (
                'id' => 34,
                'user_id' => 16,
                'movie_id' => 6,
                'parent_id' => NULL,
                'content' => 'commet moiws',
                'created_at' => '2022-04-05 15:16:57',
                'updated_at' => '2022-04-05 15:16:57',
            ),
            26 => 
            array (
                'id' => 35,
                'user_id' => 10,
                'movie_id' => 6,
                'parent_id' => 34,
                'content' => 'reply miows',
                'created_at' => '2022-04-05 15:16:57',
                'updated_at' => '2022-04-05 15:16:57',
            ),
        ));
        
        
    }
}