<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property mixed $id
 * @property mixed $title
 * @property mixed $completed
 */
class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['id' => "mixed", 'title' => "mixed", 'completed' => "mixed"])]
     public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'completed' => $this->completed,
        ];
    }
}
