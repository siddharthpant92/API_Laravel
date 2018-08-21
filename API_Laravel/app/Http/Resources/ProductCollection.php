<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Simply returns the same format of the Product Resource
        // return parent::toArray($request);
        
        // Returns the format of the Product Resource in the 'data' key, and then testCollection as well
        return [
            'data' => $this->collection,
            'testCollection' => 'test'
        ];
    }
}
