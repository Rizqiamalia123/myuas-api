<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BajuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baju = [
            [
                'nama' => 'Baju 1',
                'ukuran' => 'M, L',
                'stok' => '10',
                'harga' => '100000',
                'gambar' => 'baju-pria/bajupria1.jpg',
            ],
            [
                'nama' => 'Baju 2',
                'ukuran' => 'L, XL',
                'stok' => '15',
                'harga' => '120000',
                'gambar' => 'baju-pria/bajupria2.jpg',
            ],
            [
                'nama' => 'Baju 3',
                'ukuran' => 'XL, XXL',
                'stok' => '20',
                'harga' => '140000',
                'gambar' => 'baju-pria/bajupria3.jpeg',
            ],
            [
                'nama' => 'Baju 4',
                'ukuran' => 'M, XXL',
                'stok' => '30',
                'harga' => '160000',
                'gambar' => 'baju-pria/bajupria4.jpg',
            ],
            [
                'nama' => 'Baju Wanita 1',
                'ukuran' => 'L, XL',
                'stok' => '12',
                'harga' => '110000',
                'gambar' => 'baju-wanita/bajuwanita1.jpg',
            ],
            [
                'nama' => 'Baju Wanita 2',
                'ukuran' => 'XL, XXL',
                'stok' => '16',
                'harga' => '130000',
                'gambar' => 'baju-wanita/bajuwanita2.jpg',
            ],
            [
                'nama' => 'Baju Wanita 3',
                'ukuran' => 'M, XXL',
                'stok' => '20',
                'harga' => '150000',
                'gambar' => 'baju-wanita/bajuwanita3.jpeg',
            ],
            [
                'nama' => 'Baju Wanita 4',
                'ukuran' => 'M, L',
                'stok' => '24',
                'harga' => '170000',
                'gambar' => 'baju-wanita/bajuwanita4.jpg',
            ]
        ];
            
        \DB::table('bajus')->insert($baju);
    }
}
