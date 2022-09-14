<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'myposts';
    public function toArray($request)
    {

      ///  dd($request);
     return [
            'id' => $this->id,
            'title' => $this->title,
            'comments ' => CommentResource::collection($this->comments),
        ];

      ///  return parent::toArray($request);
    }
}
