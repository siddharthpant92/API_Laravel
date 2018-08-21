<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function updatePrice($id)
	{
		$product = Product::find($id);
		$product->price = $product->price + 5;
		$product->save();

		return $product;
	}
}
