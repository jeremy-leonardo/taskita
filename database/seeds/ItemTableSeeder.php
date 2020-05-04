<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            [
                'item_type_id' => 2,
                'brand_id' => 2,
                'item_name' => 'Polo Love 801',
                'item_stock' => 3,
                'item_price' => 8100,
                'item_description' => 'Koper berukuran 20 inci dengan dimensi 38x25x51 cm dengan bobot hanya 2,8 kg.'
            ],
            [
                'item_type_id' => 2,
                'brand_id' => 2,
                'item_name' => 'Polo Expley 802',
                'item_stock' => 3,
                'item_price' => 9200,
                'item_description' => 'Koper berukuran 20 inci, sanggup menampung hingga 25 kg.'
            ],
            [
                'item_type_id' => 4,
                'brand_id' => 3,
                'item_name' => 'Louis Vuitton Montaigne BB',
                'item_stock' => 3,
                'item_price' => 750000,
                'item_description' => 'Tas wanita berukuran 12 inci dengan dimensi 20x5x10 cm dan bobot 770 gram'
            ],
            [
                'item_type_id' => 4,
                'brand_id' => 4,
                'item_name' => 'Gucci Guccisima Black Signature Calf Top handle Leather Bag',
                'item_stock' => 3,
                'item_price' => 600000,
                'item_description' => 'Tas wanita berukuran 9.75 inci dengan dimensi 34x12x22cm dengan bobot 750 gram'
            ],
            [
                'item_type_id' => 4,
                'brand_id' => 5,
                'item_name' => 'Guess Analise Pink Shoulder Bag',
                'item_stock' => 3,
                'item_price' => 120000,
                'item_description' => 'Tas wanita berukuran 9.3 inci dengan dimensi 27x15x23cm dengan bobot 820 gram'
            ],
            [
                'item_type_id' => 4,
                'brand_id' => 6,
                'item_name' => 'Calvin Klein SIDED LRG TOTE Pink Bag',
                'item_stock' => 3,
                'item_price' => 140000,
                'item_description' => 'Tas wanita berukuran 14,4 inci dengan dimensi 36x16x25cm dengan bobot 830 gram'
            ],
            [
                'item_type_id' => 3,
                'brand_id' => 7,
                'item_name' => 'Lacoste NEOCROC BACKPACK Black',
                'item_stock' => 3,
                'item_price' => 70000,
                'item_description' => 'Ransel berukuran 18,7 inci dengan dimensi 31x14x43cm dengan bobot 570 gram'
            ],
            [
                'item_type_id' => 3,
                'brand_id' => 7,
                'item_name' => 'Versace Jeans Couture Backpack Black',
                'item_stock' => 3,
                'item_price' => 130000,
                'item_description' => 'Ransel berukuran 18,7 inci dengan dimensi 27x15x39cm dengan bobot 640 gram'
            ],
            [
                'item_type_id' => 3,
                'brand_id' => 8,
                'item_name' => 'Kenzo SPORT RUCKSACK Black',
                'item_stock' => 3,
                'item_price' => 160000,
                'item_description' => 'Ransel berukuran 14,8 inci dengan dimensi 30x12x41cm dengan bobot 560 gram'
            ],
            [
                'item_type_id' => 2,
                'brand_id' => 17,
                'item_name' => 'OFF-WHITE Transparent Luggage',
                'item_stock' => 2,
                'item_price' => 450000,
                'item_description' => 'Koper OFF-WHITE dengan tinggi 55 cm, lebar 39 cm dan kedalaman 23 cm dengan bahan polycarbonate premium'
            ],
            [
                'item_type_id' => 5,
                'brand_id' => 10,
                'item_name' => 'Kenzo Sling Bag "Crew"',
                'item_stock' => 3,
                'item_price' => 280000,
                'item_description' => 'tas sling bag nyaman dari Kenzo yang memiliki baan 100% kulit asli'
            ],
            [
                'item_type_id' => 4,
                'brand_id' => 3,
                'item_name' => 'Luis Vuitton Lockme Red Calfskin Shoulder Bag',
                'item_stock' => 2,
                'item_price' => 570000,
                'item_description' => 'Tas Luis Vuitton dengan ukuran 8,5 inci dengan bahan kulit premmium'
            ]
        ]);
    }
}
