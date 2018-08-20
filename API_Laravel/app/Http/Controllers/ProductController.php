<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product as ProductResource;
use App\Product;

class ProductController extends Controller 
{
	public function show($id) 
	{
		return new ProductResource(Product::find($id));
	}
}
