<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama' => 'Rizqi Amalia',
                'email' => 'rizqiamalia@gmail.com',
                'gambar' => 'user/user.jpg',
            ],
        ];
        \DB::table('users')->insert($user);
    }
}
