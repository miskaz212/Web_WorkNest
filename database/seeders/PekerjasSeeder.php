<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pekerja;

class PekerjasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bersihkan tabel pekerja sebelum menambahkan data dummy
        Pekerja::truncate();

        // Tambahkan data dummy pekerja
        Pekerja::create([
            'nama' => 'user 1',
            'ktp' => '2201081006',
            'alamat' => 'alo',
            'category_id' => 1002, // Sesuaikan dengan ID Kategori yang ada
            'loker_id' => 'L003', // Sesuaikan dengan ID Loker yang ada
            'user_id' => 2,
            'foto_sampul' => 'dini.jpg',
             // Sesuaikan dengan ID User yang ada
            // Jangan lupa untuk menambahkan kolom lain sesuai kebutuhan
        ]);

        // Informasi bahwa Seeder berhasil dijalankan
        $this->command->info('Pekerja seeder berhasil dijalankan!');
    }
}
