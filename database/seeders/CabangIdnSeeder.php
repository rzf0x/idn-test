<?php

namespace Database\Seeders;

use App\Models\CabangIdn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangIdnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CabangIdn::insert([
            [
                'id' => 1,
                'nama_cabang' => 'IDN Jonggol Ikhwan',
                'kuota_tkj' => 2,
                'kuota_rpl' => 2,
                'kuota_dkv' => 2,
                'kuota_smp' => 2,
            ],
            [
                'id' => 2,
                'nama_cabang' => 'IDN Jonggol Akhwat',
                'kuota_tkj' => null, // 'Tidak Ada' is represented as null
                'kuota_rpl' => 5,
                'kuota_dkv' => 5,
                'kuota_smp' => 5,
            ],
            [
                'id' => 3,
                'nama_cabang' => 'IDN Sentul',
                'kuota_tkj' => 3,
                'kuota_rpl' => 3,
                'kuota_dkv' => 3,
                'kuota_smp' => 3,
            ],
        ]);
    }
}
