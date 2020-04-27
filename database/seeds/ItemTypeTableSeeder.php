<?php

use Illuminate\Database\Seeder;

class ItemTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_type')->insert([
            [
            'item_type_name' => '-'
            ],
            [
            'item_type_name' => 'Koper'
            ],
            [
            'item_type_name' => 'Ransel'
            ],
            [
            'item_type_name' => 'Tas Wanita'
            ],
        ]);
    }
}
