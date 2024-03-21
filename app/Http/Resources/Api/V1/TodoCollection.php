<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use JetBrains\PhpStorm\ArrayShape;

class TodoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */

    #[ArrayShape(['data' => "\Illuminate\Support\Collection"])]
     public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
        ];
    }
}
