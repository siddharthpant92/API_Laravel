<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\APIControllers\ApiProductController;

class ProductController extends Controller
{
    public function show($id)
    {
        dd(Product::find($id));
    }

    public function showAPI($id)
    {
    	$apiProduct = (new ApiProductController)->show($id, false);
    	dd($apiProduct);
    }
}
