<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Pekerja;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan data admin
        DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]);

        // Tambahkan data user
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'user',
        ]);

        // Tambahkan data user lainnya
        DB::table('users')->insert([
            'name' => 'dini',
            'email' => 'dini212@gmail.com',
            'password' => Hash::make('2101'),
            'role' => 'user',
        ]);
    }
}
