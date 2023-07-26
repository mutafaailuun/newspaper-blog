<?php

use App\Models\Blog;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            // $table->string('author');
            $table->string('imageUrl');
            $table->string('title');
            $table->string('alt');
            $table->text('excerpt');
            $table->text('body');
            $table->string('slug');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }
};
//     App\Models\Blog::create([
//         'category_id' => 2,
//         'author' => 'Hafizh Ghailan Shafaraz',
//         'imageUrl' => 'girl',
//         'title' => 'Kaitan Lagu “Tertawan Hati” dengan Perspektif Kehidupan Santri di Pondok Pesantren',
//         'slug' => 'kaitan-lagu-tertawan-hati-dengan-perspektif-kehidupan-santri-di-pondok-pesantren',
//         'alt' => 'girl gathering',
//         'excerpt' => 'Lagu merupakan suatu hal yang melekat dan menjadi budaya yang tidak dapat lepas dari kehidupan manusia, termasuk kehidupan Santri di Pondok Pesantren. ',
//         'body' => 'Karena Pondok Pesantren seperti Darussalam Gontor pun sudah merilis banyak lagu seperti; Terima Kasih Sahabat, Ijhad, Allah Bersamamu, Tentang Kita, Inspirasi Dunia, dan lain-lain.         Salah satu lagu yang sering diputar dan didengarkan bahkan dijadikan playlist oleh masyarakat Indonesia saat ini adalah “Tertawan Hati” yaitu lagu pop yang dirilis pada tahun 2022 dan dinyanyikan oleh Alda Wiyekedella Arief Suyoso, dengan nama panggung Awdella, penyanyi perempuan yang lahir di Surabaya, Jawa Timur, 8 Maret 1999.        Cerita di balik Lagu “Tertawan Hati”        “Tertawan Hati” sendiri menceritakan tentang keadaan dalam sebuah hubungan yang serba salah, yaitu ingin bertahan tapi terlalu lelah dengan perjuangan mempertahankan cinta, serta ketidaksanggupan untuk hidup sendirian.        Tapi tidak menutup kemungkinan, lagu ini jika dilihat dari liriknya juga menggambarkan perspektif kehidupan santri yang menuntut ilmu di pondok pesantren dan merasakan lika-liku kehidupannya yang penuh cobaan dan halang rintang.         Berikut adalah lirik beserta penjelasannya berupa kaitan dengan lika-liku kehidupan santri        “Sudah kucoba, sepenuh hati, untuk menjadi malaikat, menepikan perasaan runtuhkan egoku, tapi sayapku remuk”, dapat dimaknai bahwa santri tersebut telah mencoba sepenuh hati untuk menuntut ilmu dan beribadah dan istiqomah untuk tidak menuruti hawa nafsunya, namun ia menemukan kekecewaan karena perangai buruk rekan-rekannya yang selalu melakukan tindakan perundungan terhadap dirinya.         “Bila kutanya pada diriku, mengapa aku bertahan, menerima keadaan yang tak baik saja, memaksakan segalanya”, dapat dimaknai bahwa santri tersebut bimbang karena dirinya tetap saja bertahan walaupun menerima keadaan yang membuatnya tersakiti, tetapi ia tetap memaksa dirinya untuk bertahan dan tidak mengundurkan diri.         “Sakit, tak sanggup, sadarkah kita terlalu hancur, hilang habis tak bersisa tapi tak mampu ku menyerah, tertawan hati”, dapat dimaknai bahwa santri tersebut merasa sakit hati sudah tidak sanggup lagi menghadapi perundungan dari rekan-rekannya, ia merasa bahwa persaudaraan sesama muslim itu sudah hilang habis tak bersisa, namun santri tersebut merasa tak mampu untuk menyerah dan mengundurkan diri, karena hatinya tertawan disebabkan oleh tekadnya yang kuat dan juga mengharapkan keridhaan Allah semata.         “Tak mau kehilangan, tapi lelah berjuang, bukankah rumah tempatku bersandar?” dapat dimaknai bahwa santri tersebut memang memiliki sahabat baik di pesantren tersebut selain rekan-rekannya yang selalu menyakitinya, yaitu sahabat yang selalu menemani dan menjadi penyemangat ataupun memiliki guru yang selalu memberikan motivasi, namun itu semua tidak berarti karena santri tersebut sudah merasa lelah menghadapi perangai buruk rekan-rekannya, sehingga pemikirannya untuk mengundurkan diri agar dapat merasakan hangatnya suasana kasih sayang orang tua di rumah semakin menguat.         “Sendiri ku tak bisa, bersama ku tersiksa, ini kenyataannya, kita tak baik saja” dapat dimaknai bahwa santri tersebut memang merasa tidak sanggup untuk sendirian dan merasa nyaman dengan sahabat-sahabatnya, ia juga merasa tersiksa jika harus selalu bersama dengan rekan-rekannya yang gemar melakukan perundungan terhadapnya, ia juga paham bahwa pada kenyataannya hubungannya dengan rekan-rekannya adalah hubungan yang tidak baik.         Sekali lagi, bahwa sesungguhnya ini hanyalah opini semata yang bisa kita ambil dari lagu yang sering kita dengar, karena kebanyakan lagu yang tercipta berasal dari berbagai pengalaman kehidupan manusia, dan dapat disimpulkan bahwa santri sebagai penuntut ilmu memang akan merasakan berbagai cobaan dan halang rintang.         Kaitannya dengan Dunia Santri        Berikut adalah kata mutiara atau mahfuzhot yang dikatakan oleh Imam Syafi’i dan berkaitan dengan kehidupan santri sebagai penuntut ilmu:         لَمْ يَذُقْ ذُلَّ التَّعَلُّمِ سَاعَةً #  تَجَرَّعَ ذُلَّ الْجَهْلِ طُوْلَ حَيَاتـِهِ        “Barangsiapa belum merasakan susahnya menuntut ilmu barang sejenak #        Ia pasti akan merasakan rendahnya kebodohan seumur hidupnya”        Walaupun proses pembelajaran ini terbilang berat, sesungguhnya santri-santri yang menuntut ilmu akan diberi kemudahan walaupun harus melewati kesulitan terlebih dahulu        “Maka sesungguhnya bersama kesulitan ada kemudahan, sesungguhnya bersama kesulitan ada kemudahan” Q.S. Al-Insyiroh:5-6        Seperti kalam-Nya yang tertulis di Surah Al-Baqoroh ayat 286:        “Allah tidak membebani seseorang melainkan sesuai dengan kesanggupannya. Dia mendapat (pahala) dari (kebajikan) yang dikerjakannya dan dia mendapat (siksa) dari (kejahatan) yang diperbuatnya. (Mereka berdoa), “Ya Tuhan kami, janganlah Engkau hukum kami jika kami lupa atau kami melakukan kesalahan. Ya Tuhan kami, janganlah Engkau bebani kami dengan beban yang berat sebagaimana Engkau bebankan kepada orang-orang sebelum kami. Ya Tuhan kami, janganlah Engkau pikulkan kepada kami apa yang tidak sanggup kami memikulnya. Maafkanlah kami, ampunilah kami, dan rahmatilah kami. Engkaulah pelindung kami, maka tolonglah kami menghadapi orang-orang kafir.” ”        Dapat disimpulkan dari ayat di atas, bahwa kita sebagai manusia tidak akan dibebani atau diuji melebihi batas kemampuannya sehingga tidak baik bagi seorang hamba terkhusus penuntut ilmu untuk terus mengeluh karena merasa kesulitan hingga menyerah.         Jadilah muslim dan mukmin yang kuat dalam menghadapi berbagai cobaan dan ujian, karena ujian adalah waktu dimana kita diuji apakah kita akan jadi mulia atau semakin hina        Seperti sebuah ungkapan umum yang sering terdengar di kalangan santri:        بِالْاِمْتِحَانِ يُكْرَمُ الْمَرْءُ أَوْ يُهَانُ        Yang artinya: “ Dengan ujian seseorang bisa dimuliakan atau dihinakan”.        Kalimat tersebut memang terdengar begitu sederhana, namun didalamnya mengandung makna yang besar.        Bagaimana tidak, apabila seseorang lulus dalam ujian, ia akan mendapat kebahagiaan yang luar biasa dan tentunya kata-kata pujian akan datang dan terus mengalir kepadanya sehingga orang tersebut merasa mulia lagi terpuji dikarenakan kelulusannya dalam melaksanakan ujian.        Sebaliknya, yaitu ketika seseorang tidak lulus dalam ujian, ia akan mendapatkan kesedihan yang luar biasa besarnya dan merasa apa yang dilakukannya selama ini sekedar sia-sia belaka, tiada guna apalagi bermanfaat. Ia juga merasakan kehinaan dan keterpurukan dengan statusnya, yaitu tidak lulus dalam pelaksanaan ujian.        Dari kejadian di atas, marilah kita mengambil pelajaran dengan bersungguh-sungguh dan tidak mengeluh dengan hal apapun yang terjadi baik itu halangan, rintangan, cobaan, ujian dan sebagainya, selalu berpikir positif dan yakin dengan pertolongan Allah serta buatlah hatimu tertawan dalam ketaqwaan dengan menjalankan segala perintah-Nya dan menjauhi segala larangan-Nya.',])
//     /**
//      * Reverse the migrations.
//      */
//     public function down() : void
//     {
//         Schema::dropIfExists('blogs');
//     }
// }