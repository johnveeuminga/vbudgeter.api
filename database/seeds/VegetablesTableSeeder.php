<?php

use Illuminate\Database\Seeder;

class VegetablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table = DB::table('vegetables');

        $table->insert([
        	"name"=> "vegetable_1", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 1
        ]);

        $table->insert([
        	"name"=> "vegetable_2", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 1
        ]);

        $table->insert([
        	"name"=> "vegetable_4", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 1
        ]);

        $table->insert([
        	"name"=> "vegetable_2", 
        	"price1"=> 54, 
        	"price2"=>67, 
        	"price3"=> 89,
        	"store_id" => 2
        ]);

        $table->insert([
        	"name"=> "vegetable_1", 
        	"price1"=> 15, 
        	"price2"=>25, 
        	"price3"=> 45,
        	"store_id" => 2
        ]);


		$table->insert([
        	"name"=> "vegetable_5", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 2
        ]);

        $table->insert([
        	"name"=> "vegetable_1", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 3
        ]);

        $table->insert([
        	"name"=> "vegetable_2", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 3
        ]);

        $table->insert([
        	"name"=> "vegetable_4", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 3
        ]);

        $table->insert([
        	"name"=> "vegetable_2", 
        	"price1"=> 60, 
        	"price2"=>70, 
        	"price3"=> 89,
        	"store_id" => 4
        ]);

        $table->insert([
        	"name"=> "vegetable_5", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 4
        ]);

        $table->insert([
        	"name"=> "vegetable_1", 
        	"price1"=> 12, 
        	"price2"=>24, 
        	"price3"=> 45,
        	"store_id" => 4
        ]);

        $table->insert([
        	"name"=> "vegetable_1", 
        	"price1"=> 10, 
        	"price2"=>20, 
        	"price3"=> 40,
        	"store_id" => 5
        ]);

        $table->insert([
        	"name"=> "vegetable_2", 
        	"price1"=> 60, 
        	"price2"=>70, 
        	"price3"=> 89,
        	"store_id" => 5
        ]);

        $table->insert([
        	"name"=> "vegetable_3", 
        	"price1"=> 5, 
        	"price2"=>15, 
        	"price3"=> 30,
        	"store_id" => 5
        ]);



    }
}
