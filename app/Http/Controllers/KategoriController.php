<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_list = [

            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],

            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku database dan SQL',
                'jumlah_buku' => 18
            ],

            [
                'id' => 3,
                'nama' => 'Networking',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 12
            ],

            [
                'id' => 4,
                'nama' => 'Web Design',
                'deskripsi' => 'Buku desain website',
                'jumlah_buku' => 20
            ],

            [
                'id' => 5,
                'nama' => 'Cyber Security',
                'deskripsi' => 'Buku keamanan sistem',
                'jumlah_buku' => 10
            ]
        ];

        return view('kategori.index', compact('kategori_list'));
    }


    public function show($id)
    {
        $kategori = [
            'id' => $id,
            'nama' => 'Programming',
            'deskripsi' => 'Buku pemrograman dan coding',
            'jumlah_buku' => 25
        ];

        $buku_list = [

            [
                'judul' => 'Belajar PHP',
                'pengarang' => 'Budi Raharjo',
                'tahun' => 2023
            ],

            [
                'judul' => 'Laravel Dasar',
                'pengarang' => 'Andi Nugroho',
                'tahun' => 2024
            ],

            [
                'judul' => 'JavaScript Modern',
                'pengarang' => 'Rina Wijaya',
                'tahun' => 2022
            ]
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }


    public function search($keyword)
    {
        $kategori_list = [

            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],

            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku database dan SQL',
                'jumlah_buku' => 18
            ]
        ];

        $hasil = [];

        foreach ($kategori_list as $kategori) {

            if (stripos($kategori['nama'], $keyword) !== false) {
                $hasil[] = $kategori;
            }
        }

        return view('kategori.search', compact('hasil', 'keyword'));
    }
}