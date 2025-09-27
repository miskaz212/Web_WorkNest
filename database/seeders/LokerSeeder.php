<?php

namespace Database\Seeders;

use App\Models\Loker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LokerSeeder extends Seeder
{
    public function run(): void
    {
        $lokers =  [
            [
                'id' => 'L001',
                'nama_loker' => 'Staf Administrasi',
                'category_id'=>1001,
                'deskripsi' => 'PT.Prima Indonesia,
                                PT.Salindo,
                                PT.Cinta Sejati,
                                PT PLN (Persero),
                                PT Bank Rakyat Indonesia,
                                PT Gudang Garam',
                'gaji' => 3,
                'kontrak_kerja' => '2 tahun',
                'foto_sampul' => 'staff-admintrasi.jpg',
            ],
            [
                'id' => 'L002',
                'nama_loker' => 'Staf Keuangan',
                'category_id'=>1001,
                'deskripsi' => 'PT.Prima Indonesia,
                                PT.Salindo,
                                PT.Cinta Sejati,
                                PT PLN (Persero),
                                PT Bank Rakyat Indonesia,
                                PT Gudang Garam',
                'gaji' => 2,
                'kontrak_kerja' => '2 tahun',
                'foto_sampul' => 'keuanagan.jpg',
            ],
            [
                'id' => 'L003',
                'nama_loker' => 'receptionis',
                'category_id'=>1001,
                'deskripsi' => 'PT.Prima Indonesia,
                                PT.Salindo,
                                PT.Cinta Sejati,
                                PT PLN (Persero),
                                PT Bank Rakyat Indonesia,
                                PT Gudang Garam',
                'gaji' => 3,
                'kontrak_kerja' => '2 tahun',
                'foto_sampul' => 'receptionist.jpg',
            ],
            [
                'id' => 'L004',
                'nama_loker' => 'Staf Administrasi',
                'category_id'=>1001,
                'deskripsi' => 'PT.Prima Indonesia,
                                PT.Salindo,
                                PT.Cinta Sejati,
                                PT PLN (Persero),
                                PT Bank Rakyat Indonesia,
                                PT Gudang Garam',
                'gaji' => 4,
                'kontrak_kerja' => '2 tahun',
                'foto_sampul' => 'equalizer.jpg',
            ],
            [
                'id' => 'L005',
                'nama_loker' => 'Staf Administrasi',
                'category_id'=>1001,
                'deskripsi' => 'PT.Prima Indonesia,
                                PT.Salindo,
                                PT.Cinta Sejati,
                                PT PLN (Persero),
                                PT Bank Rakyat Indonesia,
                                PT Gudang Garam',
                'gaji' => 5,
                'kontrak_kerja' => '2 tahun',
                'foto_sampul' => 'equalizer.jpg',
            ],
        ];
        foreach ($lokers as $Loker) {
            Loker::create($Loker);
        }
    }
}
