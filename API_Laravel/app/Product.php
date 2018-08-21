<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
	 * updating the price of the product
	 * @param  [type] $id [id of the product to be updated]
	 * @return [product instance]     [updated product]
	 */
	public function updatePrice($id)
	{
		$product = Product::find($id);
		$product->price = $product->price + 5;
		$product->save();

		return $product;
	}
}
