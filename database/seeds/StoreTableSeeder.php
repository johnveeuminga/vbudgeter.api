<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table = DB::table('stores');

    	$table->insert([
    		'store_name' => 'Store 1',
            'user_id' => 2
    	]);

    	$table->insert([
    		'store_name' => 'Store 2',
            'user_id' => 3
    	]);

    	$table->insert([
    		'store_name' => 'Store 3',
            'user_id' => 4
    	]);

    	$table->insert([
    		'store_name' => 'Store 4',
            'user_id' => 5
    	]);

    	$table->insert([
    		'store_name' => 'Store 5',
            'user_id' => 6
    	]);
    }
}
