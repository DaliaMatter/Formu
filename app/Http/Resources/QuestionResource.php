<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->category->name,
            'author' => $this->user->name,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
