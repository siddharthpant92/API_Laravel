<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\ProductCollection as ProductCollection;
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
		ProductResource::withoutWrapping();	
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
		
		ProductResource::withoutWrapping();
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

	/**
	 * Gets all the products and return it as the product resource, NOT the collection
	 * @return [product collection] [all the products]
	 */
	public function getAllResource()
	{
		return ProductResource::collection(Product::all());
	}

	/**
	 * Gets all the products and return it as the product collection
	 * @return [product collection] [all the products]
	 */
	public function getAllCollection()
	{
		return new ProductCollection(Product::all());
	}
}
