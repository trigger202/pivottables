<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
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
	    	  DB::table('Products')->insert([
	            'name' => str_random(10),
	            'price' => random_int(1, 100)
	        ]);

    	  $MaxData--;
    	}
        
    }
}
