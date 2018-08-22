<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RelatedProduct as RelatedProductResource;

class Product extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) 
    {
        if(isset($this->id))
        {
    		return [
    			'id' => $this->id,
                'attributes' => [
                    'name' => $this->name,
                    'price' => $this->price,
                ],
    			'random_key' => "random value",
    			'created_at' => (string)$this->created_at,
    			'updated_at' => (string)$this->updated_at,
                'related_product' => new RelatedProductResource($this),
                'testResource' => 'test'
    		];
        }
        else  
        {
            return [
                "test" => "do Nothing"
            ];
        }
	}
}
