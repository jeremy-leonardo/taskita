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
            'item_price' => 8000,
            'item_description' => 'Koper berukuran 20 inci dengan dimensi 38x25x51 cm dengan bobot hanya 2,8 kg.'
            ],
            [
            'item_type_id' => 2,
            'brand_id' => 2,
            'item_name' => 'Polo Expley 802',
            'item_stock' => 3,
            'item_price' => 8000,
            'item_description' => 'Koper berukuran 20 inci, sanggup menampung hingga 25 kg.'
            ],
        ]);
    }
}
