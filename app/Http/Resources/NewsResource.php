<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            'id' => $this->id ?? "",
            'titre' => $this->titre,
            'content' => $this->content,
            'category' => new CategoryResource($this->category),
            'date_debut' => $this->date_debut,
            'date_expiration' => $this->date_expiration,
            'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];;
    }
}
