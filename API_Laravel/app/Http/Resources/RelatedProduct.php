<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\APIControllers\ApiRelatedProductController as ApiRelatedProductController;

class RelatedProduct extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   
        $productId = $request->id;
        $relatedProduct = (new ApiRelatedProductController)->getRelatedProduct($productId);

        if(isset($relatedProduct->related_product))
        {
            return [
                'related_product' => $relatedProduct->related_product,
                'individual_price' => $relatedProduct->individual_price,
                'bundle_price' => $relatedProduct->bundle_price,
            ];
        }
        else
        {
            return [
                'related_product' => null,
                'individual_price' => null,
                'bundle_price' => null,
            ];
        }
    }
}