<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        User::create([
            'name' => 'Jalaludin',
            'email' => 'kangjaliel@gmail.com',
            'password' => bcrypt(12345)
        ]);

        User::create([
            'name' => 'Hafizh',
            'email' => 'hafizh@gmail.com',
            'password' => bcrypt(12345)
        ]);

        Category::create([
            'name' => 'Fikih',
            'slug' => 'fikih'
        ]);

        Category::create([
            'name' => 'Hadis',
            'slug' => 'hadis'
        ]);

        Category::create([
            'name' => 'Tasawuf',
            'slug' => 'tasawuf'
        ]);

        Blog::create([
            'title' => 'Hukum Kurban Sekaligus Akikah, Bolehkah?',
            'category_id' => 1,
            'user_id' => 1,
            'imageUrl' => 'kambing',
            'alt' => 'kambing',
            'excerpt' => 'Kurban adalah syariat Allah swt., untuk umat Islam sebagai bentuk rasa syukur kepada-Nya lantaran rezeki yang sudah Allah swt., anugerahkan berupa hewan-hewan',
            'slug' => 'hukum-kurban-sekaligus-akikah',
            'body' => 'Kurban adalah syariat Allah swt., untuk umat Islam sebagai bentuk rasa syukur kepada-Nya lantaran rezeki yang sudah Allah swt., anugerahkan berupa hewan-hewan ternak. Hal ini sebagaimana firman Allah swt., di dalam Al-Qur`an surat al-Hajj ayat 34-35; ولكل امة جعلنا منسكا ليذكروا اسم الله على ما رزقهم من بهيمة الانعام فالهكم اله واحد فله اسلموا وبشر المخبتين.( 34) الذين اذا ذكر الله وجلت قلوبهم والصابرين على ما اصابهم والمقيمى الصلوة ومما رزقنهم ينفقون (35) Artinya: Dan bagi setiap umat telah Kami syariatkan penyembelihan (kurban), agar mereka menyebut nama Allah atas rezeki yang dikaruniakan Allah kepada mereka berupa hewan ternak. Maka Tuhanmu ialah Tuhan Yang Maha Esa, karena itu berserah dirilah kamu kepada-Nya. Dan sampaikanlah (Muhammad) kabar gembira kepada orang-orang yang tunduk patuh (kepada Allah). (yaitu) orang-orang yang apabila disebut nama Allah hati mereka bergetar, orang yang sabar atas apa yang menimpa mereka, dan orang yang melaksanakan salat dan orang yang menginfakkan sebagian rezeki yang Kami karuniakan kepada mereka. (QS. Al-Hajj: 34-35). Dan yang sering menjadi pertanyaan masyarakat kita adalah hukum menggabungkan kurban dengan akikah dalam satu sembelihan. Pasalnya, ketika waktu akikah masih belum mampu untuk menyembelih dan kebetulan di momentum bulan haji mendapatkan rezeki sehingga bisa untuk menyembelih. Lalu bagaimana kacamata hukum Islam menyikapi kasus demikian? Hukum Kurban Sekaligus Akikah. Terkait hukum menggabungkan akikah dengan kurban banyak sekali di dalam literatur kitab fikih yang menyinggung status hukum kasus tersebut dan masih menunai perbedaan pendapat. Salah satunya sebagaimana yang termaktub dalam kitab Tuhfatul Muhtaj; ولو نوى بالشاة المذبوحة الأضحية والعقيقة حصلا خلافا لمن زعم خلافه اهـ. (قوله عن الأضحية) أي المندوبةArtinya; Seandainya berniat menyembelih kambing untuk kurban dan akikah maka bisa tercapai keduanya (akikah dan kurban). Adapun maksud kata kurban adalah kurban yang sunnah.Dari penjelasan di atas dapat kita pahami bahwa hukum menggabungkan akikah dan kurban sekaligus adalah boleh dan keduanya bisa mencukupi selama kurban tersebut adalah kurban sunnah, artinya bukan kurban nazar. Demikian penjelasan mengenai hukum kurban sekaligus akikah. Semoga bermanfaat. Wallahu a`lam. '
        ]);

        Blog::create([
            'title' => 'Ilmu Kanuragan Bolehkah Dalam Islam?',
            'category_id' => 2,
            'user_id' => 1,
            'imageUrl' => 'kanuragan',
            'alt' => 'man standing trying to attack his opponent',
            'excerpt' => 'Mempelajari ilmu kebal dan tenaga dalam biasanya dilakukan sebagian orang agar dijauhkan dari hal-hal yang dapat melukainya. Namun, apa hukum mempelajari ilmu kebal dan tenaga dalam menurut ajaran Islam?',
            'slug' => 'ilmu-kanuragan-menurut-islam',
            'body' => 'Mempelajari ilmu kebal dan tenaga dalam biasanya dilakukan sebagian orang agar dijauhkan dari hal-hal yang dapat melukainya. Namun, apa hukum mempelajari ilmu kebal dan tenaga dalam menurut ajaran Islam? Banyak Perguruan silat yang menawarkan ilmu kanuragan. Yang dibungkus dgn kedok wirid, dzikir, amalan, suluk dan yang lainnya. Jika dikerjakan dalam rangka pemujaan terhadap jin dan setan hukumnya adalah haram karna termasuk kesyirikan. Namun jika caranya untuk memperoleh ilmu kebal dengan berpuasa dan berdoa memohon kepada Allah, menurut Buya yahya diperbolehkan. Cara tersebut termasuk tawasul dengan amalan saleh. Kita mengamalkan doa dan puasa beberapa hari karena Allah, dengan harapan semoga diberikan kekuatan di saat berperang dan bisa selamat, tutur Buya Yahya. Dalam hadis nabi pun kita sangat dianjurkan untuk berdoa dan memohon kepada allah semata niscaya allah akan mengabulkan apa yang kita harapkan. HR. Tirmidzi 3401. حدثنا عبد الله بن معاوية الجمحي وهو رجل صالح حدثنا صالح المري عن هشام بن حسان عن محمد بن سيرين عن أبي هريرة قال قال رسول الله صلى الله عليه وسلم ادعوا الله وأنتم موقنون بالإجابة واعلموا أن الله لا يستجيب دعاء من قلب غافل لاه قال أبو عيسى هذا حديث غريب لا نعرفه إلا من هذا الوجه سمعت عباسا العنبري يقول اكتبوا عن عبد الله بن معاوية الجمحي فإنه ثقة Artinya: Telah menceritakan kepada kami Abdullah bin Muawiyah Al Jumahi ia adalah orang yang shalih. Telah menceritakan kepada kami shalih Al Muri dari Hisyam bin Hassan dari Muhammad bin Sirin dari Abu Hurairah ia berkata, Rasulullah ﷺ bersabda, Berdoalah kepada Allah dalam keadaan yakin akan dikabulkan, dan ketahuilah bahwa Allah tidak mengabulkan doa dari hati yang lalai. Abu Isa berkata, hadits ini adalah hadits gharib, kami tidak mengetahuinya kecuali dari jalur ini. Saya mendengar Abbas Al Anbari berkata, tulislah dari Abdullah bin Muawiyah Al Jumahi bahwa ia adalah orang yang tsiqah. Pada dasarnya bela diri atau mempelajari ilmu kanuragan hukumnya mubah. Dan semua amal tergantung dari niatnya. Ketika latihan bela diri dilakukan dalam rangka menyiapkan diri untuk berjihad membela kebenaran, insyaaAllah bernilai pahala. Namun jika sebatas hobi dan yang penting happy, jelas tidak ada sisi pahalanya. Dan yang lebih penting, jangan sampai ilmu kanuragan ini mengantarkan anda kepada kemaksiatan, seperti ingin mencelakai orang atau bahkan sampai membawa ke musyrikan Dalam pasal 252 KUHP (Kitab Undang-Undang Hukum Pidana) Tercantum "Setiap Orang yang menyatakan dirinya mempunyai kekuatan gaib, ilmu kanuragan, memberitahukan, memberikan harapan, menawarkan, atau memberikan bantuan jasa kepada orang lain bahwa karena perbuatannya dapat menimbulkan penyakit, kematian, atau penderitaan mental atau fisik seseorang, dipidana dengan pidana penjara paling lama 1 tahun 6 bulan atau pidana denda paling banyak kategori IV (Rp 200.000.000), demikian isi Pasal 252 ayat (1) KUHP. Dalam penjelasan Pasal 252 Ayat (1) disebutkan, ketentuan itu dimaksudkan untuk mencegah praktik main hakim sendiri yang dilakukan oleh warga masyarakat terhadap seseorang yang menyatakan dirinya mempunyai kekuatan gaib, ilmu kebal (kanuragan) dan mampu melakukan perbuatan yang dapat menimbulkan penderitaan bagi orang lain. Seperti halnya dalam Hadis dan pasal KUHP bahwasanya ilmu kenal atau ilmu kanuragan boleh dipelajari jika diniatkan untuk berjihad atau membela kebenaran. Jika dipelajari dengan tujuan membuat kekacauan atau bahkan sampai mengancam nyawa orang maka hukumnya tidak boleh dan bisa dikenakan pidana yang berlaku. Wallahu alam. '
        ]);

        Blog::create([
            'title' => 'Kaitan Lagu Tertawan Hati dengan Perspektif Kehidupan Santri di Pondok Pesantren',
            'category_id' => 3,
            'user_id' => 2,
            'imageUrl' => 'girl',
            'alt' => 'girl',
            'excerpt' => 'Karena Pondok Pesantren seperti Darussalam Gontor pun sudah merilis banyak lagu seperti; Terima Kasih Sahabat, Ijhad, Allah Bersamamu, Tentang Kita, Inspirasi Dunia, dan lain-lain.',
            'slug' => 'kaitan-lagu-tertawan-hati',
            'body' => 'Karena Pondok Pesantren seperti Darussalam Gontor pun sudah merilis banyak lagu seperti; Terima Kasih Sahabat, Ijhad, Allah Bersamamu, Tentang Kita, Inspirasi Dunia, dan lain-lain. Salah satu lagu yang sering diputar dan didengarkan bahkan dijadikan playlist oleh masyarakat Indonesia saat ini adalah Tertawan Hati yaitu lagu pop yang dirilis pada tahun 2022 dan dinyanyikan oleh Alda Wiyekedella Arief Suyoso, dengan nama panggung Awdella, penyanyi perempuan yang lahir di Surabaya, Jawa Timur, 8 Maret 1999. Cerita di balik Lagu Tertawan Hati Tertawan Hati sendiri menceritakan tentang keadaan dalam sebuah hubungan yang serba salah, yaitu ingin bertahan tapi terlalu lelah dengan perjuangan mempertahankan cinta, serta ketidaksanggupan untuk hidup sendirian. Tapi tidak menutup kemungkinan, lagu ini jika dilihat dari liriknya juga menggambarkan perspektif kehidupan santri yang menuntut ilmu di pondok pesantren dan merasakan lika-liku kehidupannya yang penuh cobaan dan halang rintang. Berikut adalah lirik beserta penjelasannya berupa kaitan dengan lika-liku kehidupan santri Sudah kucoba, sepenuh hati, untuk menjadi malaikat, menepikan perasaan runtuhkan egoku, tapi sayapku remuk, dapat dimaknai bahwa santri tersebut telah mencoba sepenuh hati untuk menuntut ilmu dan beribadah dan istiqomah untuk tidak menuruti hawa nafsunya, namun ia menemukan kekecewaan karena perangai buruk rekan-rekannya yang selalu melakukan tindakan perundungan terhadap dirinya. Bila kutanya pada diriku, mengapa aku bertahan, menerima keadaan yang tak baik saja, memaksakan segalanya, dapat dimaknai bahwa santri tersebut bimbang karena dirinya tetap saja bertahan walaupun menerima keadaan yang membuatnya tersakiti, tetapi ia tetap memaksa dirinya untuk bertahan dan tidak mengundurkan diri. Sakit, tak sanggup, sadarkah kita terlalu hancur, hilang habis tak bersisa tapi tak mampu ku menyerah, tertawan hati, dapat dimaknai bahwa santri tersebut merasa sakit hati sudah tidak sanggup lagi menghadapi perundungan dari rekan-rekannya, ia merasa bahwa persaudaraan sesama muslim itu sudah hilang habis tak bersisa, namun santri tersebut merasa tak mampu untuk menyerah dan mengundurkan diri, karena hatinya tertawan disebabkan oleh tekadnya yang kuat dan juga mengharapkan keridhaan Allah semata. Tak mau kehilangan, tapi lelah berjuang, bukankah rumah tempatku bersandar? dapat dimaknai bahwa santri tersebut memang memiliki sahabat baik di pesantren tersebut selain rekan-rekannya yang selalu menyakitinya, yaitu sahabat yang selalu menemani dan menjadi penyemangat ataupun memiliki guru yang selalu memberikan motivasi, namun itu semua tidak berarti karena santri tersebut sudah merasa lelah menghadapi perangai buruk rekan-rekannya, sehingga pemikirannya untuk mengundurkan diri agar dapat merasakan hangatnya suasana kasih sayang orang tua di rumah semakin menguat. Sendiri ku tak bisa, bersama ku tersiksa, ini kenyataannya, kita tak baik saja dapat dimaknai bahwa santri tersebut memang merasa tidak sanggup untuk sendirian dan merasa nyaman dengan sahabat-sahabatnya, ia juga merasa tersiksa jika harus selalu bersama dengan rekan-rekannya yang gemar melakukan perundungan terhadapnya, ia juga paham bahwa pada kenyataannya hubungannya dengan rekan-rekannya adalah hubungan yang tidak baik. Sekali lagi, bahwa sesungguhnya ini hanyalah opini semata yang bisa kita ambil dari lagu yang sering kita dengar, karena kebanyakan lagu yang tercipta berasal dari berbagai pengalaman kehidupan manusia, dan dapat disimpulkan bahwa santri sebagai penuntut ilmu memang akan merasakan berbagai cobaan dan halang rintang. Kaitannya dengan Dunia Santri Berikut adalah kata mutiara atau mahfuzhot yang dikatakan oleh Imam Syafii dan berkaitan dengan kehidupan santri sebagai penuntut ilmu: لم يذق ذل التعلم ساعة # تجرع ذل الجهل طول حياتـه Barangsiapa belum merasakan susahnya menuntut ilmu barang sejenak # Ia pasti akan merasakan rendahnya kebodohan seumur hidupnya Walaupun proses pembelajaran ini terbilang berat, sesungguhnya santri-santri yang menuntut ilmu akan diberi kemudahan walaupun harus melewati kesulitan terlebih dahulu Maka sesungguhnya bersama kesulitan ada kemudahan, sesungguhnya bersama kesulitan ada kemudahan Q.S. Al-Insyiroh:5-6 Seperti kalam-Nya yang tertulis di Surah Al-Baqoroh ayat 286: Allah tidak membebani seseorang melainkan sesuai dengan kesanggupannya. Dia mendapat (pahala) dari (kebajikan) yang dikerjakannya dan dia mendapat (siksa) dari (kejahatan) yang diperbuatnya. (Mereka berdoa), Ya Tuhan kami, janganlah Engkau hukum kami jika kami lupa atau kami melakukan kesalahan. Ya Tuhan kami, janganlah Engkau bebani kami dengan beban yang berat sebagaimana Engkau bebankan kepada orang-orang sebelum kami. Ya Tuhan kami, janganlah Engkau pikulkan kepada kami apa yang tidak sanggup kami memikulnya. Maafkanlah kami, ampunilah kami, dan rahmatilah kami. Engkaulah pelindung kami, maka tolonglah kami menghadapi orang-orang kafir. Dapat disimpulkan dari ayat di atas, bahwa kita sebagai manusia tidak akan dibebani atau diuji melebihi batas kemampuannya sehingga tidak baik bagi seorang hamba terkhusus penuntut ilmu untuk terus mengeluh karena merasa kesulitan hingga menyerah. Jadilah muslim dan mukmin yang kuat dalam menghadapi berbagai cobaan dan ujian, karena ujian adalah waktu dimana kita diuji apakah kita akan jadi mulia atau semakin hina Seperti sebuah ungkapan umum yang sering terdengar di kalangan santri: بالامتحان يكرم المرء أو يهان Yang artinya: Dengan ujian seseorang bisa dimuliakan atau dihinakan. Kalimat tersebut memang terdengar begitu sederhana, namun didalamnya mengandung makna yang besar. Bagaimana tidak, apabila seseorang lulus dalam ujian, ia akan mendapat kebahagiaan yang luar biasa dan tentunya kata-kata pujian akan datang dan terus mengalir kepadanya sehingga orang tersebut merasa mulia lagi terpuji dikarenakan kelulusannya dalam melaksanakan ujian. Sebaliknya, yaitu ketika seseorang tidak lulus dalam ujian, ia akan mendapatkan kesedihan yang luar biasa besarnya dan merasa apa yang dilakukannya selama ini sekedar sia-sia belaka, tiada guna apalagi bermanfaat. Ia juga merasakan kehinaan dan keterpurukan dengan statusnya, yaitu tidak lulus dalam pelaksanaan ujian. Dari kejadian di atas, marilah kita mengambil pelajaran dengan bersungguh-sungguh dan tidak mengeluh dengan hal apapun yang terjadi baik itu halangan, rintangan, cobaan, ujian dan sebagainya, selalu berpikir positif dan yakin dengan pertolongan Allah serta buatlah hatimu tertawan dalam ketaqwaan dengan menjalankan segala perintah-Nya dan menjauhi segala larangan-Nya. '
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}