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
		$product = new Product();
		$updatedProduct = $product->updatePrice($id);
		
		return new ProductResource($updatedProduct);
	}
}
