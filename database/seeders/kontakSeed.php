<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kontakSeed extends Seeder
{
    /**s
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontaks')->insert([
            [
                'nomor_telepon' => '+62 632 331234',
                'kode_pos' => '22381',
                'email' => 'Informatika@del.ac.id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
