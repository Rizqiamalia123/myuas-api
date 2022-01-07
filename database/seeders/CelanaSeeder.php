<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CelanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $celanapria = [
            [
                'nama' => 'Celana Pria 1',
                'ukuran' => 'XL, XXL',
                'stok' => '14',
                'harga' => '80000',
                'gambar' => 'celana-pria/celanapria1.jpeg',
            ],
            [
                'nama' => 'Celana Pria 2',
                'ukuran' => 'M, XXL',
                'stok' => '16',
                'harga' => '85000',
                'gambar' => 'celana-pria/celanapria2.jpg',
            ],
            [
                'nama' => 'Celana Pria 3',
                'ukuran' => 'M, L',
                'stok' => '18',
                'harga' => '90000',
                'gambar' => 'celana-pria/celanapria3.jpg',
            ],
            [
                'nama' => 'Celana Pria 4',
                'ukuran' => 'L, XL',
                'stok' => '20',
                'harga' => '95000',
                'gambar' => 'celana-pria/celanapria4.jpg',
            ],
            [
                'nama' => 'Celana Wanita 1',
                'ukuran' => 'M, XXL',
                'stok' => '15',
                'harga' => '90000',
                'gambar' => 'celana-wanita/celanawanita1.jpg',
            ],
            [
                'nama' => 'Celana Wanita 2',
                'ukuran' => 'M, L',
                'stok' => '17',
                'harga' => '92000',
                'gambar' => 'celana-wanita/celanawanita2.jpg',
            ],
            [
                'nama' => 'Celana Wanita 3',
                'ukuran' => 'L, XL',
                'stok' => '19',
                'harga' => '94000',
                'gambar' => 'celana-wanita/celanawanita3.jpg',
            ],
            [
                'nama' => 'Celana Wanita 4',
                'ukuran' => 'XL, XXL',
                'stok' => '21',
                'harga' => '96000',
                'gambar' => 'celana-wanita/celanawanita4.jpg',
            ]
        ];
        
        \DB::table('celanas')->insert($celanapria);
    }
}
