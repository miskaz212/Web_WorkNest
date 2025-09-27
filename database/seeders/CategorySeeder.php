<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catagories = [
            [
                'id'=>1001,
                'nama_kategori'=>'PT.Prima Indonesia',
                'keterangan'=>'Full of action and killing'
            ],
            [
                'id'=>1002,
                'nama_kategori'=>'PT.Salindo',
                'keterangan'=>'Full of comedy'
            ],
            [
                'id'=>1003,
                'nama_kategori'=>'PT.Cinta Sejati',
                'keterangan'=>'Full of drama'
            ],
            [
                'id'=>1004,
                'nama_kategori'=>'PT PLN (Persero)',
                'keterangan'=>'Full of drama'
            ],
            [
                'id'=>1005,
                'nama_kategori'=>'PT Gudang Garam',
                'keterangan'=>'Full of drama'
            ],
            [
                'id'=>1006,
                'nama_kategori'=>'PT Bank Rakyat Indonesia',
                'keterangan'=>'Full of drama'
            ],
        ];
        foreach($catagories as $category){
            Category::create($category);
        }
    }
}
