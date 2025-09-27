<?php

namespace Database\Seeders;

use App\Models\Loker;
use App\Models\Pekerja;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder
        $this->call(CategorySeeder::class);
        $this->call(LokerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PekerjasSeeder::class);

        // Memanggil factory
        Pekerja::factory(10)->create();
        Loker::factory(20)->create();
    }
}
