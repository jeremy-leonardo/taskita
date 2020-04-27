<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            [
            'status_name' => 'In Delivery'
            ],
            [
            'status_name' => 'To be Confirmed'
            ],
            [
            'status_name' => 'Confirmed by User'
            ],
            [
            'status_name' => 'Returnable'
            ],
            [
            'status_name' => 'Returning'
            ],
            [
            'status_name' => 'Returned'
            ],
            [
            'status_name' => 'Late'
            ],
        ]);
    }
}
