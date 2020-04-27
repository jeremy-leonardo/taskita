<?php

use Illuminate\Database\Seeder;

class PaymentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_type')->insert([
            [
            'payment_type_name' => 'GoPay'
            ],
            [
            'payment_type_name' => 'OVO'
            ],
            [
            'payment_type_name' => 'LinkAja'
            ],
            // [
            // 'payment_type_name' => 'Transfer Manual'
            // ],
        ]);
    }
}
