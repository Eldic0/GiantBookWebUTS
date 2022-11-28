<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_id' => 'BOK001',
            'pub_id_book' => 'PUB001',
            'title' => 'Pesta Bunuh Diri',
            'author' => 'Daniel Ahmad',
            'year' => '2022',
            'synopsis' => 'Terlalu banyak masalah dan misteri pada desa ini. Para penduduknya harus mengalami berbagai musibah,wabah, terbatasnya bahan pangan dan pengetahuan, bahkan gangguan binatang. Namun, itu bukanlah masalah besar bagi mereka, ada sesuatu yang jahat dan lebih sering mengganggu mereka. Kumpulan Sisik Hitam selalu datang tiap malam, mengundang penduduk ke sebuah pesta, namun pesta singkat karena selalu berakhir sebelum sempat dimulai.',
            'book_image' => 'pestabunuhdiri.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK002',
            'pub_id_book' => 'PUB001',
            'title' => 'Feel Real',
            'author' => 'Radin Azkia',
            'year' => '2017',
            'synopsis' => '"Malam itu mengubah hidup Gatari selamanya. Ia tidak habis pikir orangtuanya tega menjodohkannya dengan Gilang, si pembuat onar di sekolah. Bagaimana bisa? Hanya kata-kata itu yang memenuhi kepalanya. Sampai kapan pun ia tidak akan pernah menerima dan memaafkan Gilang laki-laki yang sudah mempermalukannya di depan teman-teman sekolah, dengan mendaratkan bibirnya diwajah Gatari."',
            'book_image' => 'feelreal.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK003',
            'pub_id_book' => 'PUB001',
            'title' => 'I for you',
            'author' => 'Orizuka',
            'year' => '2020',
            'synopsis' => 'Suatu hari dalam hidupku, kau dan aku bertemu. Masih jelas di ingatanku sosokmu yang memukauku. Lidahku jadi kelu, mulutku terkatup rapat karena malu. Setiap malam, bayangmu menari-nari dalam benakku.Ada sejuta alasan mengapa aku begitu memujamu. Kau menyinari relung gelap hatiku. Kau satu-satunya orang yang ingin kurengkuh. Kau bertanggung jawab atas segala rindu. Kau adalah yang teristimewa bagiku.Tanda-tandanya sudah jelas: aku menyukaimu. Tetapi, bagaimana caranya aku mendekatimu? Kau begitu jauh, sulit kuraih dengan jari-jemariku.Dan semakin lama, aku mulai menyadari satu hal. Bahwa kau dan aku mungkin ditakdirkan tak bisa bersatu….',
            'book_image' => 'iforyou.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK004',
            'pub_id_book' => 'PUB001',
            'title' => 'Manusia Setengah Salmon',
            'author' => 'Raditya Dika',
            'year' => '2011',
            'synopsis' => 'Nyokap memandangi penjuru kamar gue. Dia diam sebentar, tersenyum, lalu bertanya, `Kamu takut ya? Makanya belom tidur? `Manusia Setengah Salmon adalah buku keenam karya Raditya Dika yang diterbitkan pada tahun 2011. Berkonsepkan cerita komedi yang ditulis berdasarkan kisah sang penulis seperti dalam buku-buku sebelumnya.',
            'book_image' => 'manusiasalmon.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK005',
            'pub_id_book' => 'PUB002',
            'title' => 'The Eye of Darkness',
            'author' => 'Dean Koontz',
            'year' => '1996',
            'synopsis' => 'Satu tahun berlalu sejak kematian Danny, sang ibu sudah mulai menerima kenyataan yang menyakitkan itu.Namun sang ibu, Tina Evans, berani bersumpah ia baru saja melihat Danny di dalam mobil orang yang tak dikenalnya,lalu ia bermimpi bahwa Danny masih hidup.Ketika terbangun, ia menemukan pesan di kamar tidur anaknya, dua patah kata yang membuatnya sangat terguncang: BELUM MATI.Apakah seseorang mempermainkannya? Atau dirinya sendiri yang menulis pesan tersebut tanpa sadar? Apa benar anak yang ia cintai itu belum mati?',
            'book_image' => 'eyeofdarkness.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK006',
            'pub_id_book' => 'PUB002',
            'title' => 'English Classics: Around The World In Eighty Days',
            'author' => 'Jules Verne',
            'year' => '2019',
            'synopsis' => 'English Classics: Around The World In Eighty Days “Fortune favors the brave.” English Classics : Around the World in Eighty Days. English Classics is literatures collection with particular rooms for increase readers interest in reading classics. This book including Around the World in Eighty Days. Around the World In Eight Days craft ...',
            'book_image' => 'englishclassic.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK007',
            'pub_id_book' => 'PUB002',
            'title' => 'Perempuan Bayangan',
            'author' => 'Netty Virgiantini',
            'year' => '2020',
            'synopsis' => 'Di usianya yang sudah tiga puluh, Ningrum divonis tidak akan bisa memiliki keturunan. Setelah dua kali ditolak calon mertua karena kondisinya, Ningrum akhirnya menerima kenyataan bahwa seumur hidup ia tidak akan pernah menikah dan tak akan mampu membahagiakan orangtuanya. Beruntung sahabatnya menawarkan jalan keluar. Satria masih berduka sejak kepergian istrinya tiga tahun lalu. Ia berjanji tidak akan ada lagi perempuan lain di hidupnya selain Utari. Namun, ia tidak bisa menolak tawaran sepupunya yang mengenalkannya dengan Ningrum untuk sekadar mengisi sepi. Hubungan Satria dan Ningrum hanya berlandaskan keuntungan. Ningrum tidak pernah ingin menjadi pengganti Utari, apalagi menjadi bayang-bayang perempuan itu. Mereka menikah tanpa cinta. Tinggal bersama tanpa rasa. Hingga suatu saat, Ningrum mulai menyadari hal yang janggal… Ada sesuatu yang samar di antara mereka, tumbuh perlahan dan membuatnya takut kehilangan.',
            'book_image' => 'perempuanbayangan.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK008',
            'pub_id_book' => 'PUB002',
            'title' => 'Aku ini Binatang Jalang',
            'author' => 'Chairil Anwar',
            'year' => '2022',
            'synopsis' => 'Ini kali tidak ada yang mencari cinta di antara gudang, rumah tua, pada cerita tiang serta temali. Kapal, perahu tiada berlaut menghembus diri dalam mempercaya mau berpaut Gerimis mempercepat kelam. Ada juga kelepak elang menyinggung muram, desir hari lari berenang menemu bujuk pangkal akanan. Tidak bergerak dan kini tanah dan air tidur hilang ombak. Tiada lagi. Aku sendiri. Berjalan menyisir semenanjung, masih pengap harap sekali tiba di ujung dan sekalian selamat jalan dari pantai keempat, sedu penghabisan bisa terdekap. ',
            'book_image' => 'binatangjalang.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK009',
            'pub_id_book' => 'PUB003',
            'title' => 'The War I Finally Won',
            'author' => 'Kimberly Brubaker Bradle',
            'year' => '2022',
            'synopsis' => 'Setelah sang ibu tewas akibat perang, Ada Maria Smith dan adiknya secara resmi tinggal bersama wali pelindung mereka di desa. Proses adaptasinya tidak mudah bagi Ada. Bayang-bayang kekejaman mendiang ibunya di London masih terus menghantui. Apalagi ketika mereka kedatangan seorang gadis asal Jerman. Bukankah Inggris sedang berperang dengan Jerman? Lalu kenapa gadis Jerman itu malah tinggal bersama mereka? Apakah dia mata-mata?',
            'book_image' => 'warwon.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK010',
            'pub_id_book' => 'PUB003',
            'title' => 'Where Stories Begin',
            'author' => 'Wacaku',
            'year' => '2022',
            'synopsis' => 'Where Stories Begin adalah antologi cerpen hasil kurasi Redaksi Novel Elex Media dari perlombaan yang diadakan oleh Wacaku. Where Stories Begin menyuguhkan cerita pendek dari sepuluh penulis yang terpilih dari perlombaan yang diadakan pada 2022 lalu. Cerita-cerita karya Stanza Alquisha, Maria Perdana, Robin Wijaya, Arata Kim, Kanigara, Meera, Nureesh Vhalega, Ratifa Mazari, Tian Topandi, dan Zaidatul Uyun Akrami mengisahkan bahwa perkara cinta tak melulu soal kebahagiaan. 
            Bahwa cinta tak selalu semanis gulali, dan indah seperti gumpalan awan merah muda. Because these are where stories begin….',
            'book_image' => 'storiesbegin.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK011',
            'pub_id_book' => 'PUB003',
            'title' => 'Rumah Lebah',
            'author' => 'Dodi Prananda',
            'year' => '2014',
            'synopsis' => 'Selamat datang di Rumah Lebah. Di sinilah rumah bagi mereka, para boneka yang “dilahirkan” oleh Rama dan Shinta, pasangan yang saling mencinta. Melipur lara dan menemani manusia yang kesepian adalah kebanggan mereka sebagai boneka. Tapi tidak demikian dengan Peru. Ia mendapat limpahan kasih disayang dan buaian cinta dari Shinta. Ia pun mendapatkan seorang kakak manusia bernama Seno supaya hidupnya sebagai boneka tidak kesepian. Di Rumah Lebah inilah kehidupan meramu kegembiraan dan kegetiran. Suara kesedihan para boneka yang mengalami pergulatan batin; tempat tumbuhnya cinta yang terhalang takdir ... dan apa jadinya ketika seorang manusia jatuh cinta pada boneka? Singgahlah, dan jadilah kanak-kanak lagi.',
            'book_image' => 'rumahlebah.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK012',
            'pub_id_book' => 'PUB003',
            'title' => 'Ritual',
            'author' => 'Jounatan & Guntur Alam',
            'year' => '2020',
            'synopsis' => 'Siapkan pakaian si gadis, tiga helai rambutnya, dupa, bunga kenanga juga kamboja, dan … peti mati. Lalu datangi lokasi yang diyakini jadi tempat arwah gadis-gadis berkumpul. Niscaya roh yang tersesat akan menemukan jalan pulang ke jasadnya. Satu-satunya cara membangunkan Nayla dari koma adalah dengan menggelar ritual untuk memanggil rohnya. Tak sembarang orang bisa melakukannya, risikonya juga tidak main-main. Nayla bisa saja mati! Namun tepat pada tengah malam, gerbang dunia roh pun dibuka selebar-lebarnya, meski tahu bahwa imbalannya adalah darah dan nyawa….',
            'book_image' => 'Ritual.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK013',
            'pub_id_book' => 'PUB004',
            'title' => 'The Forgotten Promise',
            'author' => 'Lucy Liestyo',
            'year' => '2020',
            'synopsis' => 'Jembatan Barelang menjadi saksi bahwa Glen terikat dua janji. Dengan orang yang berbeda, tetapi dengan janji yang sama: Janji untuk menjaga seorang gadis. Akankah waktu mengubah perasaannya, atau justru membuatnya terlupa pada janji-janjinya?',
            'book_image' => 'Forgottenpromise.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK014',
            'pub_id_book' => 'PUB004',
            'title' => 'Bride`s Nightmare',
            'author' => 'Monica Petra',
            'year' => '2020',
            'synopsis' => 'Renata hilang ingatan dan mendapati dirinya berada di sebuah rumah besar dan tinggal bersama seorang kakak laki-laki bernama Hosea. Pencarian jati diri Renata dimulai saat ia melihat ada gaun pengantin yang tersimpan di dalam lemari pakaiannya, seolah gaun itu menyimpan banyak kenangan. Satu per satu mulai terkuak kalau ia sudah hampir menikah dengan kekasihnya bernama Alan. Namun Alan tidak ditemukan di mana pun. Apa yang sebenarnya terjadi pada Renata? Rahasia apa yang disembunyikan oleh Hosea?',
            'book_image' => 'bridenightmare.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK015',
            'pub_id_book' => 'PUB004',
            'title' => 'Samkok 3: Seluruh Negeri Dalam Kekacauan',
            'author' => 'Yi Mun Yol',
            'year' => '2015',
            'synopsis' => 'Setelah kematian ayahnya, Sun Ce bertekad untuk meneruskan impian ayahnya. Dia pun berhasil menguasai wilayah Jiangdong. Sementara itu, Cao Cao yang digempur musuhnya harus merelakan kepergian Dian Wei. Dian Wei tewas demi melindungi Cao Cao. Yuan Shu yang berambisi untuk menjadi kaisar, namun sifatnya yang boros dan seenaknya menjadi bumerang baginya. Hidupnya berakhir dengan menyedihkan. Dengan banyaknya yang berambisi untuk menjadi penguasa, seluruh negeri pun berada dalam kekacauan. Siapakah yang akhirnya menjadi penguasa?',
            'book_image' => 'Samkok.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOK016',
            'pub_id_book' => 'PUB004',
            'title' => 'Pertanda',
            'author' => 'Tuti Kasih',
            'year' => '2019',
            'synopsis' => 'Prang! Foto menantu Ibu Lia tiba-tiba saja terjatuh dan pecah berantakan. Bersamaan dengan itu, telepon rumah berdering. Dari telepon itu, Ibu Lia mendapat kabar bahwa menantunya mengalami kecelakaan. Apakah ini hanya cerita fiktif dalam sinetron? Nyatanya, ini benar-benar terjadi. Kematian adalah sesuatu yang mutlak dan rahasia. Namun, Tuhan selalu memberi tanda-tanda kematian seseorang pada orang-orang di sekitarnya agar siap menerima. Buku ini menceritakan berbagai kisah nyata tentang fenomena-fenomena yang menandai kematian akan segera menjemput. Maka, berjaga-jagalah!',
            'book_image' => 'pertanda.jpg'
        ]);
        
    }
}
