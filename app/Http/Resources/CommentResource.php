<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->title,
         'blog_id' => $this->blog_id,
       ///     'blog_id ' => BlogResource::collection($this->blogs),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

       /// return parent::toArray($request);
    }
}
