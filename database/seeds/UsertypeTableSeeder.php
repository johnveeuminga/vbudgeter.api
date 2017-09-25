<?php

use Illuminate\Database\Seeder;

class UsertypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed default Usertypes

        DB::table('usertypes')->insert([
            'usertype' => 'Seller'
        ]);

        DB::table('usertypes')->insert([
            'usertype' => 'Customer'
        ]);
    }
}
