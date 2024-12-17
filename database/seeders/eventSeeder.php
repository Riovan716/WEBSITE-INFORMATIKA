<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'nama' => 'Pengukuhan anggota baru HIMASTI',
                'waktu_mulai' => '2022-10-12 00:00:00',
                'waktu_selesai' => '2022-10-12 00:00:00',
                'deskripsi_singkat' => 'Pengukuhan mahasiswa angkatan 2022 sebagai anggota HIMASTI.',
                'jenis' => 'Program Kerja Tahunan HIMASTI',
                'lokasi' => 'Pantai Lumban Bul-Bul',
                'penyelenggara' => 'Kepengurusan HIMASTI',
                'kontak' => 'Reindhard (+6282367xxxxxx)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2019, 2020, 2021, dan 2022. Dengan dresscode training pack Del. ',
                'penjelasan' => 'Pengukuhan mahasiswa angkatan 2022 sebagai anggota HIMASTI. Pengukuhan ini dilakukan sebagai bentuk dan simbol bahwa angakatan 2022 telah dikukuhkan dan disahkan menjadi bagian dari keluarga HIMASTI. Dengan adanya kegiatan ini, diharapkan mahasiswa dan mahasiswi baru dapat merasakan kehangatan dan solidaritas dari keluarga HIMASTI. Setelah menjadi bagian dari keluarga Himpunan Mahasiswa Sarjana Informatika, maka mahasiswa dan mahasiswi Himpunan Mahasiswa Sarjana Informatika secara sadar harus siap menerima dan bertanggung jawab terhadap aturan dan peraturan serta menjaga nama baik Himpunan.',
            ],
            [
                'nama' => 'Natal Himpunan Mahasiswa Informatika',
                'waktu_mulai' => '2022-10-12 00:00:00',
                'waktu_selesai' => '2022-10-12 00:00:00',
                'deskripsi_singkat' => 'Perayaan hari natal untuk semua anggota HIMASTI',
                'jenis' => 'Kegiatan Tahunan Program Studi',
                'lokasi' => 'Gereja HKBP Sitoluama',
                'penyelenggara' => 'Mahasiswa-mahasiswi S1 Informatika',
                'kontak' => 'Guntur (+6282367xxxxxx)',
                'deskripsi' => 'Seluruh mahasiwa dan mahasiswi S1 Informatika diharapkan berpartisipasi dan turut hadir dalam acara natal ini. Dengan dresscode berwarna hijau. ',
                'penjelasan' => 'Perayaan hari natal untuk seluruh anggota HIMASTI. Natal adalah sebuah perayaan yang di lakukan oleh semua umat Kristiani di seluruh dunia untuk menyambut sang Juru Selamat, yaitu Tuhan Yesus Kristus. Tidak perlu dengan perayaan yang besar dan mewah tetapi bagaimana kita benar-benar meresapi dan mengenang bagaimana kedatangan Tuhan Yesus Kristus datang ke dunia ini untuk menyelamatkan kita. Melalui perayaan Natal ini, yang diharapakan mahasiswa/i menjadi generasi muda intelektual yang selalu takut akan Tuhan.',
            ],
            [
                'nama' => 'Malam Keakraban Program Studi S1 Informatika',
                'waktu_mulai' => '2023-02-04 00:00:00',
                'waktu_selesai' => '2022-02-05 00:00:00',
                'deskripsi_singkat' => 'Acara ini bertujuan untuk mempererat tali persaudaraan antar mahasiswa/i informatika dari angkatan terkecil hingga yang terbesar.',
                'jenis' => 'Kegiatan Refreshing',
                'lokasi' => 'Lapangan Napitupulu',
                'penyelenggara' => 'Informatika angkatan 2019',
                'kontak' => ' 08218766xxxx (Judah)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2019, 2020, 2021, dan 2022.',
                'penjelasan' => 'Pada acara ini seluruh mahasiswa/i akan bermalam dengan menggunakan tenda. Setiap mahasiswa/i wajib membawa peralatan pribadi yang mungkin dibutuhkan selama acara. Untuk rangkaian kegiatan yang akan dilakukan, akan dibagikan melalui grup antar angkatan prodi S1 Informatika. Diharapkan seluruh mahasiswa/i Informatika angkatan 2019 hingga 2022 mengikuti kegiatan ini dengan baik dan tertib. Tiada kesan tanpa kehadiran rekan-rekan sekalian.',
            ],
            [
                'nama' => 'HIMASTI Coding Challenge (HCC)',
                'waktu_mulai' => '2023-03-10 00:00:00',
                'waktu_selesai' => '2023-03-15 00:00:00',
                'deskripsi_singkat' => ' Acara ini bertujuan untuk mengasah kemampuan pada mahasiswa/i di Institut Teknologi Del.',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'HIMASTI',
                'kontak' => '08137520xxxx (Guntur Sinaga)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2020, 2021, dan 2022.',
                'penjelasan' => 'HIMASTI Coding Challenge adalah sebuah kompetisi yang diadakan oleh pengurus HIMASTI untuk menjelankan salah satu program kerja yang telah mereka rancang di awal pembentukan kepanitian HIMASTI.
                Program ini biasanya di adakan di Institut Teknologi Del dan diikuti oleh mahasiswa/i Institut Teknologi dari berbagai bidang program studi. Dan di rencanakan di tahun ini program ini di berlakukan untuk mahasiswa/i dari luar kampus Institut Teknologi Del.
                Tujuan dari HCC:
                A. Melatih kemampuan mahasiswa/I dan Siswa dalam menyelesaikan suatu masalah dengan menggunakan bahasa pemrograman.
                B. Melatih jiwa kompetitif mahasiswa/I dan Siswa agar mampu bersaing untuk kompetisi yang sama tingkat nasional hingga internasional.
                Menambah pengalaman dan pengetahuan mahasiswa/I dan Siswa yang berhubungan dengan pemrograman kompetitif
                ',
            ],
            [
                'nama' => 'HIMASTI PHOTOGRAPHY COMPETITION ',
                'waktu_mulai' => '2023-01-23 00:00:00',
                'waktu_selesai' => '2023-01-23 00:00:00',
                'deskripsi_singkat' => 'Melakukan event yang dimana seluruh rekan himasti akan mengikuti Kompetisi Fotografi yang mengenai seputar HIMASTI ',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => ' Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '08218766xxxx (Dian Jorgy)
                ',
                'deskripsi' => '',
                'penjelasan' => 'Himasti Photography Competition ini adalah suatu kegiatan kompetisi yang diselenggarakan oleh kepanitian Himasti untuk seluruh anggota Himasti dalam  hal mengabadikan momen-momen yang ada di Institut Teknologi Del yang sesuai dengan tema yang dibuat oleh penyelenggara.
                Program ini berguna untuk mengembangkan bakat mahasiswa/i Institut Teknologi Del di bidang photography.
                ',
            ],
            [
                'nama' => 'Webinar',
                'waktu_mulai' => '2023-03-20 00:00:00',
                'waktu_selesai' => '2023-03-20 00:00:00',
                'deskripsi_singkat' => 'Mengadakan diskusi dan sharing knowledge oleh alumni kepada seluruh anggota HIMASTI',
                'jenis' => 'Kegiatan Belajar',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => '08218766xxxx (Nanchy Siadari)',
                'deskripsi' => '',
                'penjelasan' => 'Kegiatan webinar ini di adakan guna untuk menambah ilmu setiap mahasiswa/i prodi S1 Informatika terkait ilmu di luar proses pembelajaran yang di sistemkan oleh kampus. Misalnya webinar yang diadakan oleh ikatan alumni untuk memberikan wawasan terkait dunia pekerjaan kepada mahasiswa/i prodi S1 Informatika.',
            ],
            [
                'nama' => 'KM Cup',
                'waktu_mulai' => '2023-01-20 00:00:00',
                'waktu_selesai' => '2023-01-20 00:00:00',
                'deskripsi_singkat' => 'Setiap anggota HIMASTI akan melakukan pertandingan olahraga dan kesenian.
                ',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08218766xxxx (Kevin Samosir)',
                'deskripsi' => 'Partisipasi akan kegiatan yang diadakan oleh BEM',
                'penjelasan' => 'Kompetisi ini dirancang oleh kepengurusan HIMASTI untuk anggota HIMASTI guna melatih skill dan meningkatkan solidaritas antar setiap anggota HIMASTI.',
            ],
            [
                'nama' => 'Welcoming Party',
                'waktu_mulai' => '2024-01-27 00:00:00',
                'waktu_selesai' => '2024-01-27 00:00:00',
                'deskripsi_singkat' => 'Calon anggota baru HIMASTI dikukuhkan menjadi anggota tetap HIMASTI .
                ',
                'jenis' => 'Event',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08116230035 (Pengeran Simamora)',
                'deskripsi' => 'Calon anggota baru HIMASTI dikukuhkan menjadi anggota tetap HIMASTI ',
                'penjelasan' => 'Mempererat hubungan dan rasa kekeluargaan antar mahasiswa Himasti.',
            ],
            [
                'nama' => 'HIMASTI CUP ',
                'waktu_mulai' => '2024-02-3 00:00:00',
                'waktu_selesai' => '2024-02-24 00:00:00',
                'deskripsi_singkat' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian.',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08116230035 (Pengeran Simamora)',
                'deskripsi' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian',
                'penjelasan' => 'Melatih skill olahraga dan meningkatkan solidaritas antar setiap anggota HIMASTI.',
            ],
            [
                'nama' => 'War FITE',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian.',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08116230035 (Pengeran Simamora)',
                'deskripsi' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian',
                'penjelasan' => 'Meningkatkan solidaritas mahasiswa IT DEL',
            ],
            [
                'nama' => 'HiCo (Himasti Competition)',
                'Waktu Pelaksanaan' => '8 Maret 2025',
                'jenis' => 'Event',
                'Tujuan' => 'Menumbuhkan rasa minat dan kompetisi mahasiswa terkhususnya dibidang pemograman dan juga desain',
                'deskripsi_singkat' => 'Membuat kompetisi yang memiliki 2 divisi yaitu HCC (Himasti Coding Competion) dan juga HDC (Himasti Desain Competion). Acara ini akan diselenggarakan di lingkup IT Del.',
                'lokasi' => 'Auditorium',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Riset dan Teknologi',
                'kontak' => ' 081260071260(Prans Simarmata)',
                'Estimasi Biaya' => 'Menyesuaikan'
            ],
            [
                'nama' => 'Sharing knowledge ',
                'Waktu Pelaksanaan' => 'Januari - November 2025',
                'jenis' => 'Event',
                'Tujuan' => 'Memberikan pengetahuan terkhususnya kepada anggota Himasti tentang teknologi ', 'deskripsi_singkat' => 'Menjadi wadah bagi anggota Himasti untuk bisa saling berbagi pengetahuan dan juga memungkinkan untuk mengadakan webinar dari alumni untuk anggota Himasti yang berkaitan dengan dunia teknologi',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Riset dan Teknologi',
                'kontak' => ' 081260071260(Prans Simarmata)',
                'Estimasi Biaya' => 'Menyesuaikan'
            ],
            [
                'nama' => 'Open Pre Order ',
                'Waktu Pelaksanaan' => 'Menyesuaikan',
                'jenis' => 'Event',
                'Tujuan' => 'Menambah Uang Kas Himasti ',
                'deskripsi_singkat' => 'Memberikan layanan promosi berbayar bagi usaha yang ingin mempromosikan dagangan atau jasanya melalui akun social media',
                'lokasi' => 'Auditorium',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Dana dan Usaha',
                'kontak' => ' 082161800457(Sunanda Munthe)',
                'Estimasi Biaya' => 'Tidak memerlukan biaya '
            ],
            [
                'nama' => 'Membuat dan menjual Souvenir ',
                'Waktu Pelaksanaan' => 'Menyesuaikan',
                'jenis' => 'Event',
                'Tujuan' => 'Menambah Uang Kas Himasti ',
                'deskripsi_singkat' => 'Menjual barang yang ber-Temakan DEL ',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Dana dan Usaha',
                'kontak' => ' 082161800457(Sunanda Munthe)',
                'Estimasi Biaya' => 'Rp.100.000 - Rp.150.000'
            ],
            [
                'nama' => 'Mengadakan Bazar',
                'Waktu Pelaksanaan' => 'Pada event Himasti atau BEM ',
                'jenis' => 'Event',
                'Tujuan' => 'Menambah Uang Kas Himasti ',
                'deskripsi_singkat' => 'Menjual makanan atau minuman',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Dana dan Usaha',
                'kontak' => ' 082161800457(Sunanda Munthe)',
                'Estimasi Biaya' => 'Rp.500.000 - Rp.1.000.000 / Harga dapat berubah-ubah '
            ],
            [
                'nama' => 'HIMASTI Tutorial ',
                'Waktu Pelaksanaan' => 'Setiap bulan dengan jadwal yang fleksibel, menyesuaikan permintaan mahasiswa.',
                'jenis' => 'Event',
                'Tujuan' => 'Memberikan tambahan pembelajaran untuk membantu mahasiswa, terutama yang masih kesulitan memahami materi perkuliahan yang diajarkan di kelas',
                'deskripsi_singkat' => 'Kegiatan ini berfokus pada pembahasan topik yang kurang dipahami mahasiswa, dengan melibatkan mahasiswa yang telah menguasai materi untuk menjadi pengajar.',
                'lokasi' => 'IT Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => ' 085244275171(Okdini Hutagalung)',
                'Estimasi Biaya' => 'Tidak memerlukan biaya.'
            ],
            [
                'nama' => 'Pengumpulan dan Pembagian Referensi Belajar ',
                'Waktu Pelaksanaan' => 'Berlangsung selama masa kepengurusan.',
                'jenis' => 'Event',
                'Tujuan' => 'Menambah koleksi soal untuk membantu mahasiswa lebih percaya diri menghadapi kuis, UTS, dan UAS.', 'deskripsi_singkat' => 'Mengumpulkan soal-soal dari berbagai angkatan untuk disusun menjadi bank soal yang dapat diakses oleh seluruh anggota HIMASTI.',
                'lokasi' => 'Google Drive ',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => ' 085244275171(Okdini Hutagalung)',
                'Estimasi Biaya' => 'Tidak memerlukan biaya.'
            ],
            [
                'nama' => 'Pengadaan Webinar',
                'Waktu Pelaksanaan' => 'Menyesuaikan jadwal yang tersedia.',
                'jenis' => 'Event',
                'Tujuan' => 'Membekali mahasiswa dengan wawasan dan keterampilan dasar untuk mempersiapkan diri menghadapi dunia kerja, sekaligus mempererat relasi dengan alumni HIMASTI.', 'deskripsi_singkat' => 'Mengadakan diskusi dan sesi berbagi pengalaman oleh alumni untuk seluruh anggota HIMASTI.',
                'lokasi' => 'IT DEL / Zoom Meeting ',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => ' 085244275171(Okdini Hutagalung)',
                'Estimasi Biaya' => 'Menyesuaikan kebutuhan'
            ],
            [
                'nama' => 'Sharing Knowledge dan Temu Ramah Informatika ',
                'Waktu Pelaksanaan' => '16 November 2024 : Pertemuan Angk. 19 dan 21 dengan Ang.24 23 November 2024 : Pertemuan Angk. 23 dengan Ang.24 30 November 2024 : Pertemuan Angk.22 dengan Ang.24',
                'jenis' => 'Event',
                'Tujuan' => 'Memperdekat hubungan antar Mahasiswa Angk. 21, 21 dan 23 kepada Angk.24 ', 'deskripsi_singkat' => 'Program Humas Himasti dimana Mahasiswa Angk. 21, 21 dan 23 diberikan waktu untuk melakukan pendekatan/sharing kepada mahasiswa baru Angk.24. ',
                'lokasi' => 'Lapangan Napitupulu, Lingkungan Kampus IT Del ',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Hubungan Masyarakat',
                'kontak' => '085831057136(Esra Silaen)',
                'Estimasi Biaya' => 'Rp. 300.000 '
            ],
            [
                'nama' => 'Pengukuhan dan Penyambutan Anggota Baru HIMASTI',
                'Waktu Pelaksanaan' => 'Belum ditentukan ',
                'jenis' => 'Event',
                'Tujuan' => '• Mengenalkan HIMASTI Memberikan pemahaman kepada mahasiswa baru tentang HIMASTI sebagai wadah untuk berpartisipasi, berkembang, dan bersosialisasi di lingkungan kampus
                                • Pengukuhan Identitas Memberikan penghargaan dan tanda pengenal
                                resmi kepada mahasiswa baru dengan jaket Himpunan sebagai
                                anggota sah HIMASTI
                                • Membangun Persahabatan dan Relasi Menciptakan suasana yang
                                santai dan akrab di acara penyambutan mahasiswa baru sebagai
                                anggota baru HIMASTI untuk memungkinkan mahasiswa baru
                                berkenalan, membentuk hubungan pertemanan, dan membangun
                                jaringan sosial di antara sesama anggota HIMASTI
                                • Mendorong Partisipasi Aktif Merangsang minat dan partisipasi
                                mahasiswa baru untuk berperan aktif dalam berbagai kegiatan yang
                                diadakan oleh HIMASTI selama masa perkuliahan.
                                • Memberikan Informasi Penting Menyampaikan informasi praktis
                                terkait program, kegiatan, dan sumber daya yang dapat diakses oleh
                                anggota HIMASTI, sehingga mahasiswa baru dapat lebih terlibat dan
                                terinformasi. ',
                'deskripsi_singkat' => 'Program Humas Himasti yang bertujuan untuk memperkenalkan Himasti kepada Calon Anggota Himasti dan sekaligus mengukuhkan Calon Anggota menjadi Anggota resmi Himasti. ',
                'lokasi' => 'Pantai Lumban Bul-bul, Balige ',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Hubungan Masyarakat',
                'kontak' => '085831057136(Esra Silaen)',
                'Estimasi Biaya' => 'Rp.3.000.000 / Biaya dapat berubah sesuai kondisi Websitenya berfungsi sebagai portal informasi yang memberikan rincian rinci mengenai program studi, termasuk kurikulum yang diikuti, fokus studi yang ditawarkan, dan prospek karir yang dapat diharapkan lulusan.'
            ],
            [
                'nama' => 'Pembuatan artikel mengenai Program Studi',
                'Waktu Pelaksanaan' => 'Setiap bulan akan ada 2 artikel',
                'jenis' => 'Event',
                'Tujuan' => '- Mengenalkan HIMASTI yang dapat diakses melalui website resmi.
                            - Memberikan informasi rinci tentang program studi, meliputi
                            kurikulum, fokus studi, dan prospek karir lulusan
                            - Mempromosikan kegiatan dan acara yang diselenggarakan oleh
                            HIMASTI.',
                'deskripsi_singkat' => 'Artikel ini berfungsi sebagai portal informasi yang memberikan rincian rinci mengenai program studi, termasuk kurikulum yang diikuti, fokus studi yang ditawarkan, dan prospek karir yang dapat diharapkan lulusan',
                'lokasi' => 'Situs website HIMASTI',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Hubungan Masyarakat',
                'kontak' => '085831057136(Esra Silaen)',
                'Estimasi Biaya' => 'Tidak Ada'
            ],
            [
                'nama' => 'Documentary Excellence ',
                'Waktu Pelaksanaan' => 'Sepanjang tahun ',
                'jenis' => 'Event',
                'Tujuan' => 'Mengabadikan momen berharga dan mempublikasikannya di Instagram resmi HIMASTI. ', 
                'deskripsi_singkat' => 'Membuat catatan visual setiap momen berharga dalam acara HIMASTI, termasuk webinar, rapat kerja, dan pertemuan anggota HIMASTI. ',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '081363333029(Yizreel Sipahutar)',
                'Estimasi Biaya' => 'Program tidak membutuhkan biaya '
            ],
            [
                'nama' => 'Creative Design ',
                'Waktu Pelaksanaan' => 'Minggu keempat Januari 2025',
                'jenis' => 'Event',
                'Tujuan' => 'Menyediakan materi visual berkualitas untuk memperindah acara HIMASTI. ',
                'deskripsi_singkat' => 'Membuat desain poster dan banner kreatif ataupun materi visual untuk mendukung acara HIMASTI, baik formal maupun non-formal.',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '081363333029(Yizreel Sipahutar)',
                'Estimasi Biaya' => 'Program tidak membutuhkan biaya '
            ],
            [
                'nama' => 'HIMASTI Photography Challenge',
                'Waktu Pelaksanaan' => 'Minggu pertama Febuari 2024 - Minggu keempat Februari 2024  ',
                'jenis' => 'Event',
                'Tujuan' => 'Mendorong anggota HIMASTI untuk mengembangkan kreativitas dalam fotografi melalui kompetisi yang berkaitan dengan HIMASTI',
                'deskripsi_singkat' => 'Anggota HIMASTI atau anggota HIMAPRO lain (jika memungkinkan) berpartisipasi dalam kompetisi, dan menyediakan poster/video promosi yang sesuai dengan tema acara yang akan digelar oleh HIMASTI',
                'lokasi' => 'IT DEL ',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '081363333029(Yizreel Sipahutar)',
                'Estimasi Biaya' => 'Menyesuaikan'
            ],
            [
                'nama' => 'HIMASTI Digital Presence Management ',
                'Waktu Pelaksanaan' => 'Sepanjang tahun ',
                'jenis' => 'Event',
                'Tujuan' => ' Membuat konten media sosial HIMASTI tetap menarik dan profesional, serta mengembangkan kreativitas anggota dalam bidang visualisasi. ',
                'deskripsi_singkat' => 'Mengevaluasi setiap foto dan/atau video yang akan atau telah diunggah untuk memastikan kualitas konten yang memadai, mempromosikan citra positif HIMASTI.',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '081363333029(Yizreel Sipahutar)',
                'Estimasi Biaya' => 'Menyesuaikan'
            ]
        ]);
    }
}
