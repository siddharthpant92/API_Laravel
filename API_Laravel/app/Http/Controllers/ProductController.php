<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product as ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller 
{
	/**
	 * Basic get request
	 * @param  [type] $id [id of the product]
	 * @return [product instance]     [The requested Product]
	 */
	public function show($id) 
	{
		return new ProductResource(Product::find($id));
	}

	/**
	 * Basic post request to update the price of the specific product
	 * @param  [type] $id [id of the product]
	 * @return [product instance]     [the updated product]
	 */
	public function updatePrice($id)
	{
		$product = new Product();
		$updatedProduct = $product->updatePrice($id);
		
		return new ProductResource($updatedProduct);
	}

	/**
	 * This is a test method to check if it is possible return different arrays from the product resource.
	 * @return [product instance] [null product instance]
	 */
	public function doNothing()
	{
		return new ProductResource(null);
	}
}
