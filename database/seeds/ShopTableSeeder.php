<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$MaxData = 30;
    	while ($MaxData>0) 
    	{
	        DB::Table('Shops')->insert([
	        	'name'=>str_random(20),

	        ]);
	        $MaxData--;
    	}
    }
}
