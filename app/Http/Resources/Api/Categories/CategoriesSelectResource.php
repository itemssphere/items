<?php

namespace App\Http\Resources\Api\Categories;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesSelectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'children' => CategoriesSelectResource::collection($this->children),
        ];
    }
}
