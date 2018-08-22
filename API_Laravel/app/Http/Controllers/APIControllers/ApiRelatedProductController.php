<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Resources\RelatedProduct as RelatedProductResource;
use App\RelatedProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiRelatedProductController extends Controller
{
    public function getRelatedProduct($productID)
    {
    	return new RelatedProductResource(RelatedProduct::find($productID));
    }
}
