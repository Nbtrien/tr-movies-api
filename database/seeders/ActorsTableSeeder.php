<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actors')->delete();
        
        \DB::table('actors')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'chris evans',
                'birthday' => '1981-06-13',
                'gender' => 'Nam',
                'story' => '<p>Chris Evans tên khai sinh là Christopher Robert "Chris" Evans, là nam diễn viên người Mỹ nổi tiếng với các vai diễn Johnny Storm trong bộ phim "Fantastic Four" , vai Human Torch trong "Fantastic Four: Rise of the Silver Surfer" , vai Steve Rogers / Captain America trong các phim Captain America: Kẻ báo thù đầu tiên , The Avengers và Captain America 2: Chiến binh mùa đôngThe Avengers: Age of Ultron và Captain America: Nội chiến siêu anh hùng&nbsp;</p>',
                'view' => 0,
                'country_id' => 2,
                'image_id' => 29,
                'created_at' => '2021-04-21 06:22:25',
                'updated_at' => '2021-04-21 06:22:25',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'robert downey jr',
                'birthday' => '1965-04-04',
                'gender' => 'Nam',
            'story' => '<p>Robert Downey Jr. là một nam diễn viên nổi tiếng người Mỹ. Ông bắt đầu diễn xuất từ năm 5 tuổi trong phim "Pound\' của cha ông. Ông được biết đến qua nhiều phim khác như: Air America, Natural Born Killers, Less Than Zero (film)\'Less Than Zero, Soapdish... Những bộ phim gần đây như: Kiss Kiss Bang Bang, The Singing Detective, A Scanner Darkly, Tropic Thunder, Sherlock Holmes: A Game Of The Shadows Sherlock Holmes, Gothika, Zodiac... Và đặc biệt là vai diễn nổi tiếng Tony Stark / Iron Man trong 3 phần của seri phim "Iron Man" được chuyển thể từ bộ truyện cùng tên của Marvel Comics, và trong nhiều phim tương tự khác như: The Avenger, Saturday Night Live...</p>',
                'view' => 0,
                'country_id' => 2,
                'image_id' => 30,
                'created_at' => '2021-04-21 06:28:34',
                'updated_at' => '2021-04-21 06:28:34',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'chris hemsworth',
                'birthday' => '1983-08-11',
                'gender' => 'Nam',
                'story' => '<p>Chris Hemsworth chào đời ở <a href="https://vi.wikipedia.org/wiki/Melbourne">Melbourne</a>, Australia, mẹ anh là Leonie và cha là Craig Hemsworth. Gia đình anh sau đó chuyển đến sống tại một nông trại ở <a href="https://vi.wikipedia.org/wiki/L%C3%A3nh_th%E1%BB%95_B%E1%BA%AFc_%C3%9Ac">Lãnh thổ Bắc Úc</a>. Anh học trung học tại Heathmont College và ít năm sau lại chuyển đến sống ở đảo Phillip. Anh có người anh trai Luke và em trai Liam cũng là diễn viên.</p>',
                'view' => 0,
                'country_id' => 13,
                'image_id' => 86,
                'created_at' => '2021-05-01 14:45:28',
                'updated_at' => '2021-05-01 14:45:28',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'sebastian stan',
                'birthday' => '1982-08-13',
                'gender' => 'Nam',
            'story' => '<p><strong>Sebastian Stan</strong> (sinh ngày 13 tháng 8 năm 1982) là một diễn viên người Mỹ gốc <a href="https://vi.wikipedia.org/wiki/Rom%C3%A2nia">România</a>. Ở mảng phim truyền hình, anh đã vào vai Carter Baizen trong <a href="https://vi.wikipedia.org/wiki/Gossip_Girl_(ti%E1%BB%83u_thuy%E1%BA%BFt)">Gossip Girl</a>, Hoàng tử Jack Benjamin trong <a href="https://vi.wikipedia.org/w/index.php?title=Kings_(phim)&amp;action=edit&amp;redlink=1">Kings</a>, Jefferson trong <a href="https://vi.wikipedia.org/wiki/Ng%C3%A0y_x%E1%BB%ADa_ng%C3%A0y_x%C6%B0a_(phim_truy%E1%BB%81n_h%C3%ACnh)">Once Upon The Time</a> và T.J. Hammond trong <a href="https://vi.wikipedia.org/w/index.php?title=Political_Animals&amp;action=edit&amp;redlink=1">Political Animals</a> – vai diễn mang lại cho anh một để cử Giải thưởng diễn viên phụ xuất sắc nhất do giới phê bình lựa chọn.</p>',
                'view' => 0,
                'country_id' => 2,
                'image_id' => 87,
                'created_at' => '2021-05-01 14:47:44',
                'updated_at' => '2021-05-01 14:47:44',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'daniel radcliffe',
                'birthday' => '1989-07-23',
                'gender' => 'Nam',
            'story' => '<p>Danie Radcliffe sinh ra tại <a href="https://vi.wikipedia.org/wiki/Fulham">Fulham</a>, Tây <a href="https://vi.wikipedia.org/wiki/Lu%C3%A2n_%C4%90%C3%B4n">Luân Đôn</a>, là con trai duy nhất của Alan George Radcliffe và Marcia Jeannine Gresham (nhũ danh Marcia Gresham Jacobson). Bà mẹ của Daniel Radcliffe là <a href="https://vi.wikipedia.org/wiki/Ng%C6%B0%E1%BB%9Di_Do_Th%C3%A1i">người Do Thái</a> sinh ra ở Nam Phi và lớn lên ở <a href="https://en.wikipedia.org/wiki/Westcliff-on-Sea">Westcliff-on-Sea</a>, <a href="https://vi.wikipedia.org/wiki/Essex">Essex</a>. Tổ tiên của Radcliffe là những người Do Thái nhập cư đến từ Ba Lan và Nga.</p>',
                'view' => 0,
                'country_id' => 10,
                'image_id' => 88,
                'created_at' => '2021-05-01 14:52:19',
                'updated_at' => '2021-05-01 14:52:19',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Emma Watson',
                'birthday' => '1990-04-15',
                'gender' => 'Nữ',
                'story' => '<p>Emma được sinh ra tại <a href="https://vi.wikipedia.org/wiki/Paris">Paris</a>, <a href="https://vi.wikipedia.org/wiki/Ph%C3%A1p">Pháp</a>. Cô là con gái đầu lòng của hai <a href="https://vi.wikipedia.org/wiki/Lu%E1%BA%ADt_s%C6%B0">luật sư</a> người Anh là bà <a href="https://vi.wikipedia.org/w/index.php?title=Jacqueline_Luesby&amp;action=edit&amp;redlink=1">Jacqueline Luesby</a> và ông Chris Watson. Emma sống ở <a href="https://vi.wikipedia.org/wiki/Maisons-Laffitte">Maisons-Laffitte</a> gần <a href="https://vi.wikipedia.org/wiki/Paris">Paris</a> cho đến khi lên 5. Sau khi cha mẹ <a href="https://vi.wikipedia.org/wiki/Ly_d%E1%BB%8B">ly dị</a>, cô chuyển về <a href="https://vi.wikipedia.org/wiki/Anh">Anh</a> để sống cùng mẹ ở <a href="https://vi.wikipedia.org/wiki/Oxfordshire">Oxfordshire</a> còn cuối tuần thì đến thăm bố ở <a href="https://vi.wikipedia.org/wiki/Lu%C3%A2n_%C4%90%C3%B4n">Luân Đôn</a>. Emma tiết lộ rằng cô nói được một ít <a href="https://vi.wikipedia.org/wiki/Ti%E1%BA%BFng_Ph%C3%A1p">tiếng Pháp</a> nhưng không còn lưu loát và tốt như trước nữa.</p>',
                'view' => 0,
                'country_id' => 10,
                'image_id' => 89,
                'created_at' => '2021-05-01 14:55:54',
                'updated_at' => '2021-05-01 14:55:54',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Millie Bobby Brown',
                'birthday' => '2004-02-19',
                'gender' => 'Nữ',
                'story' => '<p>Millie Bobby Brown là một nữ diễn viên và nhà sản xuất phim người Anh. Vai Eleven trong loạt phim truyền hình khoa học viễn tưởng Cậu bé mất tích giúp Brown trở nên nổi tiếng và được đề cử giải Primetime Emmy cho hạng mục Nữ diễn viên phụ phim truyền hình xuất sắc nhất.</p>',
                'view' => 0,
                'country_id' => 10,
                'image_id' => 150,
                'created_at' => '2021-05-21 02:36:23',
                'updated_at' => '2021-05-21 02:36:23',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Finn Wolfhard',
                'birthday' => '2002-02-23',
                'gender' => 'Nam',
                'story' => '<p>Finn Wolfhard là nam diễn viên, ca sĩ và diễn viên lồng tiếng người Canada. Cậu được biết đến chủ yếu qua vai diễn Mike Wheeler trong bộ phim truyền hình Stranger Things chiếu trên Netflix, và Richie Tozier trong It - bộ phim chuyển thể từ tiểu thuyết kinh dị cùng tên của Stephen King.</p>',
                'view' => 0,
                'country_id' => 14,
                'image_id' => 151,
                'created_at' => '2021-05-21 02:38:20',
                'updated_at' => '2021-05-21 02:38:20',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Noah Schnapp',
                'birthday' => '2004-10-03',
                'gender' => 'Nam',
                'story' => '<p>Noah Schnapp là một diễn viên người Canada-Mỹ. Cậu được biết tới nhiều nhất qua vai diễn Will Byers trong loạt phim truyền hình web khoa học viễn tưởng kinh dị Cậu bé mất tích trên Netflix.</p>',
                'view' => 0,
                'country_id' => 2,
                'image_id' => 152,
                'created_at' => '2021-05-21 02:39:35',
                'updated_at' => '2021-05-21 02:39:35',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Orlando Bloom',
                'birthday' => '1977-01-13',
                'gender' => 'Nam',
                'story' => '<p>Orlando Jonathan Blanchard Bloom là nam diễn viên người Anh. Anh trở nên nổi tiếng với vai diễn đột phá vào năm 2001 là hoàng tử tiên Legolas trong loạt phim Chúa tể những chiếc nhẫn và năm 2003 với vai người thợ rèn Will Turner trong Cướp biển vùng Caribbe.</p>',
                'view' => 0,
                'country_id' => 10,
                'image_id' => 153,
                'created_at' => '2021-05-21 02:44:55',
                'updated_at' => '2021-05-21 02:44:55',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Ian McKellen',
                'birthday' => '1939-05-25',
                'gender' => 'Nam',
                'story' => '<p>Sir Ian Murray McKellen là một nam diễn viên sân khấu, điện ảnh nổi tiếng người Anh. Ông từng giành được 1 giải Quả cầu vàng, 6 giải Laurence Olivier, 1 giải Tony, 2 đề cử giải Oscar, 4 đề cử giải BAFTA và 5 đề cử giải Emmy</p>',
                'view' => 0,
                'country_id' => 10,
                'image_id' => 154,
                'created_at' => '2021-05-21 02:46:26',
                'updated_at' => '2021-05-21 02:46:26',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Henry Cavill',
                'birthday' => '1983-05-05',
                'gender' => 'Nam',
                'story' => '<p>Henry William Dalgliesh Cavill là một diễn viên người Anh. Anh đã xuất hiện trong các bộ phim Stardust và Immortals, và đóng vai Charles Brandon trong series The Tudors của Showtime từ năm 2007 đến 2010. Anh được biết đến nhiều nhất qua vai Clark Kent / Siêu Nhân trong bộ phim Man of Steel.</p>',
                'view' => 0,
                'country_id' => 10,
                'image_id' => 155,
                'created_at' => '2021-05-21 02:50:31',
                'updated_at' => '2021-05-21 02:50:31',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Michael Sheen',
                'birthday' => '1969-02-05',
                'gender' => 'Nam',
                'story' => '<p>Michael Christopher Sheen là một diễn viên, nhà sản xuất và nhà hoạt động chính trị người xứ Wales</p>',
                'view' => 0,
                'country_id' => 15,
                'image_id' => 156,
                'created_at' => '2021-05-21 02:54:53',
                'updated_at' => '2021-05-21 02:54:53',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'David Tennant',
                'birthday' => '1971-04-18',
                'gender' => 'Nam',
                'story' => '<p>David John Tennant là một nam diễn viên người Scotland. Anh được biết đến với vai diễn hóa thân thứ mười của The Doctor trong loạt phim khoa học viễn tưởng của BBC Doctor Who, Giacomo Casanova trong loạt phim hài kịch của BBC Casanova, hoàng tử trong bộ phim chuyển thể năm 2009 của Công ty Royal Shakespeare của Hamlet, ...</p>',
                'view' => 0,
                'country_id' => 16,
                'image_id' => 157,
                'created_at' => '2021-05-21 02:56:32',
                'updated_at' => '2021-05-21 02:56:32',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Gal Gadot',
                'birthday' => '1985-04-30',
                'gender' => 'Nữ',
                'story' => '<p>Gal Gadot là một nữ người mẫu, diễn viên người Israel. Cô được biết đến khi đoạt giải Hoa hậu Israel vào năm 2004.&nbsp;</p>',
                'view' => 0,
                'country_id' => 17,
                'image_id' => 158,
                'created_at' => '2021-05-21 03:00:24',
                'updated_at' => '2021-05-21 03:00:24',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Aidan Gallagher',
                'birthday' => '2003-09-18',
                'gender' => 'Nam',
                'story' => '<p>Aidan Gallagher sinh ngày 18 tháng 9 năm 2003 là một diễn viên người Mỹ. Vai diễn chính đầu tiên của anh là thể hiện một trong bốn người, Nicky Harper, trong loạt phim truyền hình hài Nickelodeon Nicky, Ricky, Dicky &amp; Dawn.</p>',
                'view' => 0,
                'country_id' => 2,
                'image_id' => 159,
                'created_at' => '2021-05-21 03:02:51',
                'updated_at' => '2021-05-21 03:02:51',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Logan Lerman',
                'birthday' => '1992-01-19',
                'gender' => 'Nam',
                'story' => '<p>Logan Wade Lerman là diễn viên đến từ California, Mỹ. Anh được biết đến nhiều nhất với vai diễn chính trong phim Percy Jackson &amp; kẻ cắp tia chớp.</p>',
                'view' => 0,
                'country_id' => 2,
                'image_id' => 215,
                'created_at' => '2021-06-02 15:32:07',
                'updated_at' => '2021-06-02 15:32:07',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Leonardo DiCaprio',
                'birthday' => '1974-11-11',
                'gender' => 'Nam',
                'story' => '<p>Leonardo Wilhelm DiCaprio là một diễn viên, nhà sản xuất phim, nhà hoạt động môi trường người Mỹ.</p>',
                'view' => 0,
                'country_id' => 2,
                'image_id' => 216,
                'created_at' => '2021-06-02 15:34:33',
                'updated_at' => '2021-06-02 15:34:33',
            ),
        ));
        
        
    }
}