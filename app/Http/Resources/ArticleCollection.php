<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */

    /*
    'keyword' => $body["keyword"],
            'content' => $body["content"],
            'country' => $body["country"],
            'city' => $body["city"],
            'price' => $body["price"],
            'devise' => $body["devise"],
            'user_id' => Auth::user()->id
    */
    public function toArray(Request $request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
