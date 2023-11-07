<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            'id' => $this?->id,
            'name' => $this?->name,
            "parent_id"=>$this?->parent_id,
            'parent_category' => $this->when($this->parent_id, new CategoryResource($this->parent)),
            'created_at' => $this?->created_at,
            'updated_at' => $this?->updated_at,
        ];;
    }
}
