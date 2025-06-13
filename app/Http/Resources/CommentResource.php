<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Comment ID' => $this->id,
            'User Comment' => $this->comment,
            'Commented on' => $this->created_at->diffForHumans(),
            'Replies' => ReplyResource::collection($this->whenLoaded('replies')),
        ];
    }
}
