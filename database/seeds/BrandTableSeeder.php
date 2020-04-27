<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
            [
            'brand_name' => '-'
            ],
            [
            'brand_name' => 'Polo'
            ],
            [
            'brand_name' => 'Samsonite'
            ],
            [
            'brand_name' => 'Tourister'
            ],
            [
            'brand_name' => 'TUMI'
            ],
            [
            'brand_name' => 'Gearbag'
            ],
            [
            'brand_name' => 'Neosack'
            ],
            [
            'brand_name' => 'Bonjour'
            ],
            [
            'brand_name' => 'Reebok'
            ],
            [
            'brand_name' => 'Fossil'
            ],
            [
            'brand_name' => 'Gucci'
            ],
            [
            'brand_name' => 'Longchamp'
            ],
            [
            'brand_name' => 'Prada'
            ],
        ]);
    }
}
