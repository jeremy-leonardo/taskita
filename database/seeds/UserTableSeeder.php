<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
            'user_name' => 'User01', 
            'user_email' => 'user@mail.com',
            'user_password' => bcrypt('password'),
            'user_phone_number' => '08234273242',
            'user_address' => 'Jl. Kenangnan Selatan A/17, Kemanggisan, Barat',
            'user_nik' => '1050241708900001',
            ],
            [
            'user_name' => 'Jeremy Leonardo', 
            'user_email' => 'jeremy_leonardo@mail.com',
            'user_password' => bcrypt('password'),
            'user_phone_number' => '0823426456',
            'user_address' => 'Jl. Italia Timur S/17, Kemanggisan, Barat',
            'user_nik' => '1050241708900002',
            ],
            [
            'user_name' => 'Jeremy', 
            'user_email' => 'jeremy@mail.com',
            'user_password' => bcrypt('password'),
            'user_phone_number' => '08234443242',
            'user_address' => 'Jl. Kentara Selatan Z/18, Kemanggisan, Barat',
            'user_nik' => '1050241708900003',
            ],
        ]);
    }
}
