<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class kopmetisiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kompetisi')->insert([
            [
                'nama' => 'Hackathon Code For The Nation 2022',
                'tanggal' => '2022-09-05 00:00:00',
                'penyelenggara' => '(riset.ai, Biznet Gio, IT Del',
                'keterangan' => 'Hackathon Code For The Nation 2022',
                'gambar' => '27.png',
                'link' => 'https://www.radiodelfm.co.id/digelar-di-institut-teknologi-del-ajang-hackhaton-sukses-bikin-mahasiswa-menyala/',
            ],
            [
                'nama' => 'Huawei Developer Competition 2023 APAC',
                'tanggal' => '2023-07-1 00:00:00',
                'penyelenggara' => 'Huawei Indonesia',
                'keterangan' => 'Kompetisi pengembang Huawei 2023 wilayah APAC.',
                'gambar' => '20.png',
                'link' => 'https://competition.intl.huaweicloud.com/intl/en-us/information/1201724739/introduction?utm_adplace=AdPlace027421',
            ],
            [
                'nama' => 'Huawei ICT Competition 2023 Indonesia (Innovation Track)',
                'tanggal' => '2023-08-20 00:00:00',
                'penyelenggara' => 'Huawei Indonesia',
                'keterangan' => 'Kompetisi inovasi ICT Huawei 2023 Indonesia.',
                'gambar' => '21.png',
                'link' => 'https://e.huawei.com/id/news/apac/apac-ict-competition-2023',
            ],
            [
                'nama' => 'ICSTAR Hackhaton',
                'tanggal' => '2023-07-1 00:00:00',
                'penyelenggara' => 'ONE Indonesia',
                'keterangan' => 'Hackathon ICSTAR untuk solusi teknologi inovatif.',
                'gambar' => '22.png',
                'link' => 'https://icstar.oneindonesia.id/',
            ],
            [
                'nama' => 'Indie Game Ignite COMPFEST 15',
                'tanggal' => '2023-07-1 00:00:00',
                'penyelenggara' => 'Kompetisi game indie di COMPFEST 15.',
                'keterangan' => 'Kompetisi inovasi ICT Huawei 2023 Indonesia.',
                'gambar' => '23.png',
                'link' => 'https://compfest.id/competition/igi',
            ],

            [
                'nama' => 'International Collegiate Programming Contest',
                'tanggal' => '2023-12-2 00:00:00',
                'penyelenggara' => ' ICPC Asia Jakarta.',
                'keterangan' => 'Kontes pemrograman ICPC Asia Jakarta 2023.',
                'gambar' => '24.png',
                'link' => 'https://competition.binus.ac.id/icpc2023/index/aboutinc',
            ],

            [
                'nama' => 'ON MIPA PT (Bidang Matematika) 2023',
                'tanggal' => '2024-04-25 00:00:00',
                'penyelenggara' => 'Kementrian Pendidikan, Kebudayaan, Riset, dan Teknologi',
                'keterangan' => 'Olimpiade Nasional Matematika Dan Ilmu Pengetahuan Alam Perguruan Tinggi 2023',
                'gambar' => '25.png',
                'link' => 'https://pusatprestasinasional.kemdikbud.go.id/event/riset-dan-inovasi/dikti/olimpiade-nasional-matematika-dan-ilmu-pengetahuan-alam-2023-dikti',
            ],
            [
                'nama' => 'ON MIPA PT (Bidang Matematika) 2024',
                'tanggal' => '2024-04-25 00:00:00',
                'penyelenggara' => 'Kementrian Pendidikan, Kebudayaan, Riset, dan Teknologi',
                'keterangan' => 'Olimpiade Nasional Matematika Dan Ilmu Pengetahuan Alam Perguruan Tinggi 2024',
                'gambar' => '17.png',
                'link' => 'https://pusatprestasinasional.kemdikbud.go.id/event/riset-dan-inovasi/dikti/olimpiade-nasional-matematika-dan-ilmu-pengetahuan-alam-perguruan-tinggi-2024-2023-dikti',
            ],
            [
                'nama' => 'Building Security Lab Microsoft (U-Connect 2024)',
                'tanggal' => '2024-04-23 00:00:00',
                'penyelenggara' => 'Microsoft Indonesia',
                'keterangan' => 'Laboratorium Microsoft untuk uji dan riset keamanan',
                'gambar' => '18.png',
                'link' => 'https://www.microsoft.com/en-us/security/blog/2024/09/19/join-us-at-microsoft-ignite-2024-and-learn-to-build-a-security-first-culture-with-ai/',
            ],
            [
                'nama' => 'Google Cloud Arcade Program 2024',
                'tanggal' => '2024-05-1 00:00:00',
                'penyelenggara' => 'Google Indonesia',
                'keterangan' => 'Program Google Cloud Arcade untuk pengembangan keterampilan digital.',
                'gambar' => '19.png',
                'link' => 'https://cloud.google.com/blog/topics/training-certifications/the-arcade-with-google-cloud-game-helps-boost-cloud-skills',
            ],
        ]);
    }

}
