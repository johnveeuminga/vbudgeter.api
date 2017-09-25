<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'email' => 'customer@example.com',
            'name' => 'Test Customer',
            'username' => 'customer',
            'password' => bcrypt('password'),
            'address' => 'Test Address',
            'contact_info' => 'contact',
            'usertype_id' => 2
        ]);

        DB::table('users')->insert([
            'email' => 'seller@example.com',
            'name' => 'Test Seller',
            'username' => 'seller',
            'address' => 'Test Address',
            'contact_info' => 'contact',
            'password' => bcrypt('password'),
            'usertype_id' => 1
        ]);

        DB::table('users')->insert([
            'email' => 'seller1@example.com',
            'name' => 'Test Seller',
            'username' => 'seller1',
            'address' => 'Test Address',
            'contact_info' => 'contact',
            'password' => bcrypt('password'),
            'usertype_id' => 1
        ]);

        DB::table('users')->insert([
            'email' => 'seller2@example.com',
            'name' => 'Test Seller',
            'username' => 'seller2',
            'address' => 'Test Address',
            'contact_info' => 'contact',
            'password' => bcrypt('password'),
            'usertype_id' => 1
        ]);

        DB::table('users')->insert([
            'email' => 'seller3@example.com',
            'name' => 'Test Seller',
            'username' => 'seller3',
            'address' => 'Test Address',
            'contact_info' => 'contact',
            'password' => bcrypt('password'),
            'usertype_id' => 1
        ]);

        DB::table('users')->insert([
            'email' => 'seller4@example.com',
            'name' => 'Test Seller',
            'username' => 'seller4',
            'address' => 'Test Address',
            'contact_info' => 'contact',
            'password' => bcrypt('password'),
            'usertype_id' => 1
        ]);
    }
}
