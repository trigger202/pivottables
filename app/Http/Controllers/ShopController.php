<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Product;


class ShopController extends Controller
{
    //

    public function addProductToShop($id)
    {
    	$shop = Shop::findorFail($id);

    	$fakeProduct = new Product();
    	$fakeProduct->name = "test product 3";
    	$fakeProduct->price=200;

    	$fakeProduct->save();



    	$newProductID = $fakeProduct->id;

    	$shop->products()->attach($newProductID);



		return 'done';


    }

    public function index(Request $request)
    {
	    dd($request);
    }


    public function store(Request $request)
    {

    }
    
}
