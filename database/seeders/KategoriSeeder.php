<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::create([
            'nama_kategori' => 'Programming',
            'icon' => 'code-slash',
            'warna' => 'primary'
        ]);

        Kategori::create([
            'nama_kategori' => 'Database',
            'icon' => 'database',
            'warna' => 'success'
        ]);

        Kategori::create([
            'nama_kategori' => 'Web Design',
            'icon' => 'palette',
            'warna' => 'info'
        ]);

        Kategori::create([
            'nama_kategori' => 'Networking',
            'icon' => 'wifi',
            'warna' => 'warning'
        ]);

        Kategori::create([
            'nama_kategori' => 'Data Science',
            'icon' => 'graph-up',
            'warna' => 'danger'
        ]);
    }
}