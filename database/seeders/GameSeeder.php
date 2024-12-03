<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id_game' => '2358720',
                'name' => 'Black Myth: Wukong',
                'type' => 'steam',
                'price' => '699999',
                'discount' => '599000'
            ],
            [
                'id_game' => '1245620',
                'name' => 'Elden Ring',
                'type' => 'steam',
                'price' => '599000',
                'discount' => '499000'
            ],
            [
                'id_game' => '1091500',
                'name' => 'Cyberpunk 2077',
                'type' => 'steam',
                'price' => '699999',
                'discount' => '399000'
            ],
            [
                'id_game' => '413150',
                'name' => 'Stardew Valley',
                'type' => 'steam',
                'price' => '115999',
                // 'discount' => '57999'
            ],
            [
                'id_game' => '1627720',
                'name' => 'Lies of P',
                'type' => 'steam',
                'price' => '870000',
                // 'discount' => '522000'
            ],
            [
                'id_game' => '2300320',
                'name' => 'Farming Simulator 25',
                'type' => 'steam',
                'price' => '970000',
                // 'discount' => '522000'
            ],
        ];

        foreach ($datas as $data) {
            Game::create($data);
        }
    }
}
