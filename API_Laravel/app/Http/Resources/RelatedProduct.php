<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\RelatedProductController;

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
        $relatedProduct = RelatedProductController::getRelatedProduct($productId);

        return [
            'related_product' => $relatedProduct->related_product,
            'individual_price' => $relatedProduct->individual_price,
            'bundle_price' => $relatedProduct->bundle_price,
        ];
    }
}