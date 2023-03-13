<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'slug'=>$this->slug,
        ];
    }
}