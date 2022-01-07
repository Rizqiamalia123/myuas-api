<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CelanaWanitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $celanawanita = [
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

        \DB::table('celana_wanitas')->insert($celanawanita);
    }
}
