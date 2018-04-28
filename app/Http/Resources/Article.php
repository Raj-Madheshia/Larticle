<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'control' => [
                'version' => '1.0.0',
            ],

        ];
        
    }
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'Author_url' => url('https://www.google.com') 
        ];
    }
}
