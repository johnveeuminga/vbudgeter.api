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
            'user_id' => 2,
            'store_desc' => 'Store 1 sample description',
            'latitude' => 16.414543238567195,
            'longitude' => 120.59428324702753
    	]);

    	$table->insert([
    		'store_name' => 'Store 2',
            'store_desc' => 'Store 2 sample description',
            'user_id' => 3,
            'latitude' => 16.415098981642657,
            'longitude' => 120.59456219676508
    	]);

    	$table->insert([
    		'store_name' => 'Store 3',
            'store_desc' => 'Store 3 sample description',
            'user_id' => 4,
            'latitude' => 16.415304812008348,
            'longitude' => 120.59544196132197
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
