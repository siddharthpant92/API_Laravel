<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\ProductCollection;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $isApi = true)
    {
        ProductResource::withoutWrapping();
        if($isApi)
        {
            // Being called by an api route
            return new ProductResource(Product::find($id));
        }
        else
        {
            // Being called by standard controller from web route
            return Product::find($id);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = (new Product)->updatePrice($id);

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * This is a test method to check if it is possible to return different arrays from the product resource for the API response
     * @return [type] [description]
     */
    public function doNothing()
    {
        ProductResource::withoutWrapping();
        return new ProductResource(null);
    }

    /**
     * Get all the products and return them to the Product Resource, NOT the collection
     * @return [type] [description]
     */
    public function getAllResource()
    {
        ProductResource::withoutWrapping();
        return ProductResource::collection(Product::all());
    }

    /**
     * Get all the products and return them to the Product Collection
     * @return [type] [description]
     */
     public function getAllCollection()
     {
        ProductCollection::withoutWrapping();
        return new ProductCollection(Product::all());
     }
}
