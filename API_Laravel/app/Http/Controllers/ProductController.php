<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product as ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller 
{
	public function show($id) 
	{
		return new ProductResource(Product::find($id));
	}

	public function updatePrice($id)
	{
		$product = Product::find($id);
		$product->price = $product->price + 5;
		$product->save();
		return new ProductResource($product);
	}
}
