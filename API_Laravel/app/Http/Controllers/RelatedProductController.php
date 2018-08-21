<?php

namespace App\Http\Controllers;

use App\Http\Resources\RelatedProduct as RelatedProductResource;
use App\RelatedProduct;
use Illuminate\Http\Request;

class RelatedProductController extends Controller
{
    public function getRelatedProduct($productID)
    {
    	return new RelatedProductResource(RelatedProduct::find($productID));
    }
}
