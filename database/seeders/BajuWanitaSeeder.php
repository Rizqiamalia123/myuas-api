<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BajuWanitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bajuwanita = [
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
            
        \DB::table('baju_wanitas')->insert($bajuwanita);
    }
}