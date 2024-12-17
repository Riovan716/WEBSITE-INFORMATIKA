<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dosenSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            [
                'nama' => "Arie Satia Dharma, S.T, M.Kom.",
                'deskripsi' => '<p>Jabatan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  : Ketua Program Studi Sarjana Informatika dan Ketua Senat Fakultas Informatika dan Teknik Elektro</p>
                <p>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;   : <a href="mailto:ariesatia@del.ac.id">ariesatia@del.ac.id</a></p>
            
                <p>Google-Scholar&nbsp;&nbsp;&nbsp;: <a href="https://scholar.google.com/citations?user=KpvGjxMAAAAJ&hl=en&oi=ao" target="_blank" style="color: blue; text-decoration: underline;">Arie Google Scholar</a></p>
            
                <p>Latar Belakang Pendidikan&nbsp; &nbsp;:</p>
                <ul><li>S1 Teknik Elektro, Universitas Kristen Maranatha, Indonesia</li><li>S2 Teknik Informatika, Universitas Sumatera Utara, Indonesia</li></ul><p>',
                'gambar' => "Arie.jpg",
                'status' => 'Aktif',
            ],

            [
                'nama' => "Dr. Arlinta Christy Barus, ST., M.InfoTech.",
                'deskripsi' => '<p>Jabatan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  : Dosen</p>
                <p>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;   : <a href="mailto:arlinta@del.ac.id">arlinta@del.ac.id</a></p>
               
                <p>Google-Scholar&nbsp;&nbsp;&nbsp;: <a href="https://scholar.google.com/citations?user=DspQ-LEAAAAJ&hl=en&oi=ao" target="_blank" style="color: blue; text-decoration: underline;">Arlinta Google Scholar</a></p>
               
                <p>Latar Belakang Pendidikan&nbsp; &nbsp;:</p>
                <ul><li>S1 Teknik Informatika, Institut Teknologi Bandung, Indonesia </li><li>S2 Information and Communication, University of Wollongong, Australia</li><li>S3 Information and Communication Technology, Swinburne University of Technology, Australia</li></ul>',
                'gambar' => "Arlinta.png",
                'status' => 'Aktif',
            ],
            [
                'nama' => "Dr. Johannes Harungguan Sianipar, S.T., M.T.",
                'deskripsi' => '<p>Jabatan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  : Dosen</p>
                <p>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;   : <a href="mailto:johannes@del.ac.id">johannes@del.ac.id</a></p>
               
                <p>Google-Scholar&nbsp;&nbsp;&nbsp;: <a href="https://scholar.google.com/citations?user=BRV3FGgAAAAJ&hl=en&oi=ao" target="_blank" style="color: blue; text-decoration: underline;">Arlinta Google Scholar</a></p>
               
                <p>Latar Belakang Pendidikan&nbsp; &nbsp;:</p>
                <ul><li>S1 Teknik Elektro, STT Telkom, Indonesia </li><li>S2 Teknik Informatika, Institut Teknologi Bandung, Indonesia</li><li>S3 Hasso Plattner Institut, Hasso Plattner Institut, Jerman</li></ul>',

                'gambar' => "Johannes.jpg",
                'status' => 'Aktif',
            ],
            [
                'nama' => "Herimanto, S.Kom., M.Kom",
                'deskripsi' => '<p>Jabatan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  : Dosen</p>
                <p>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;   : <a href="mailto:herimanto.pardede@del.ac.id">herimanto.pardede@del.ac.id</a></p>

                <p>Google-Scholar&nbsp;&nbsp;&nbsp;: <a href="https://scholar.google.com/citations?user=waQkmkcAAAAJ&hl=en&oi=sra" target="_blank" style="color: blue; text-decoration: underline;">Herimanto Google Scholar</a></p>
            
                <p>Latar Belakang Pendidikan&nbsp; &nbsp;:</p>
                <ul><li>S1 Ilmu Komputer, Universitas Sumatera Utara, Indonesia</li><li>S2 Teknik Informatika, Universitas Sumatera Utara, Indonesia</li></ul><p>',
                'gambar' => "Herimanto.jpeg",
                'status' => 'Aktif',
            ],
            [
                'nama' => "Iustisia Natalia Simbolon, S.Kom., M.T.",
                'deskripsi' => '<p>Jabatan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  : Dosen</p>
                <p>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;   : <a href="mailto:Iustisia.simbolon@del.ac.id">Iustisia.simbolon@del.ac.id</a></p>
                <p>Google-Scholar&nbsp;&nbsp;&nbsp;: <a href="https://scholar.google.com/citations?user=Xu8OahgAAAAJ&hl=en&oi=ao" target="_blank" style="color: blue; text-decoration: underline;">Iustisia Google Scholar</a></p>
            
                <p>Latar Belakang Pendidikan&nbsp; &nbsp;:</p>
                <ul><li>S1 Ilmu Komputer Universitas Sumatera Utara</li><li>S2 Sistem Informasi, Institut Teknologi Bandung, Indonesia</li></ul><p>',
                'gambar' => "Iustisia.png",
                'status' => 'Aktif',
            ],
            [
                'nama' => "Nenni Mona Aruan, S.Pd., M.Si",
                'deskripsi' => '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>nenni.aruan@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td>&nbsp;</td></tr></tbody></table></figure>',
                'gambar' => "Nenni.jpeg",
                'status' => "Tidak Aktif",
            ],

            [
                'nama' => "Tahan HJ Sihombing, S.Pd., M. App Ling",
                'deskripsi' => "",
                'gambar' => "Tahan.jpeg",
                'status' => "Tidak Aktif",
            ],
            [
                'nama' => "Anthon Roberto Tampubolon, S.Kom, M.T.",
                'deskripsi' => '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>anthon.roberto@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td><ul><li>S1 Teknik Informatika STIKOM UYELINDO Kupang</li>
                <li>S2 Informatika Institut Teknologi Bandung</li></ul></td></tr></tbody></table></figure><h4>Publikasi</h4><figure class="table"><table><tbody><tr><td>1</td><td>Document Clustering using Combination of Kmeans and Single Linkage Clustering Algorithm</td></tr><tr><td>2</td>
                <td>Implementation of Sentiment Analysis on Twitter Using Naive Bayes Algorithm to Know the People Responses to the Debate of DKI Jakarta Governor Election, The 2017 3rd Recent Advancement in Informatics, Electrical and Electronics Engineering International Conference (RAIEIC),
                20-22 November 2017</td></tr></tbody></table></figure>',
                'gambar' => "Anton.jpg",
                'status' => "Tidak Aktif",
            ],
            [
                'nama' => "Lit Malem Ginting, S.Si, MT",
                'deskripsi' => '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td><a href="mailto:litmalem.ginting@del.ac.id">litmalem.ginting@del.ac.id</a></td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td>
                <td><ul><li>S1 Fisika ITB 2005</li><li>S2 Informatika ITB 2012</li></ul></td></tr></tbody></table></figure><h4>Publikasi</h4><figure class="table"><table><tbody><tr><td><ol><li>&nbsp;</li></ol></td><td>Kajian Algoritma Craig Raynold pada Kerumunan (Flocking),
                Seminar Nasional Teknologi Informasi dan Komunikasi di Daerah Rural (SNaTIKRa) 2017, 22 November 2017</td></tr></tbody></table></figure>',
                'gambar' => "LitMalem.jpg",
                'status' => "Tidak Aktif",
            ],
            [
                'nama' => "Yaya Setiadi, S.Si., MT",
                'deskripsi' => '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>yaya@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td><ul><li>S1 Matematika ITB 2000</li>
                <li>S2 Informatika ITB 2011</li></ul></td></tr></tbody></table></figure>',
                'gambar' => "Yaya.jpg",
                'status' => "Tidak Aktif",
            ],

            [
                'nama' => "Ranty Deviana Siahaan, S.Kom, M.Eng.",
                'deskripsi' => '<p>Jabatan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  : Dosen</p>
                <p>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;   : <a href="mailto:ranty.siahaan@del.ac.id">ranty.siahaan@del.ac.id</a></p>
                <p>Google-Scholar&nbsp;&nbsp;&nbsp;: <a href="https://scholar.google.com/citations?user=CD7Wx6IAAAAJ&hl=en&oi=ao" target="_blank" style="color: blue; text-decoration: underline;">Ranty Google Scholar</a></p>
            
                <p>Latar Belakang Pendidikan&nbsp; &nbsp;:</p>
                <ul><li>S1 Informatika, Institut Teknologi Del, Indonesia</li><li>S2 Informatika, universitas Gadjah Mada, Indonesia</li></ul><p>',
                'gambar' => "Ranti.jpeg",
                'status' => 'Aktif',
            ],
        ]);
    }
}
