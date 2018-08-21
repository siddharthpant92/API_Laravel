<?php

namespace App\Http\Controllers;

use App\Http\Resources\RelatedProduct as RelatedProductResource;
use App\RelatedProduct;
use Illuminate\Http\Request;

class RelatedProductController extends Controller
{
    public static function getRelatedProduct($productID)
    {
    	return new RelatedProductResource(RelatedProduct::find($productID));
    }
}
