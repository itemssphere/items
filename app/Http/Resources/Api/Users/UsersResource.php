<?php

namespace App\Http\Resources\Api\Users;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'name' => $this->getTranslation('name', app()->getLocale()),
            'email' => $this->email,
            'roles' => $this->roles,
            'date' => $this->created_at->isoFormat('DD.MM.YYYY / H:m'),
            'seen' => ($this->last_seen instanceof Carbon) ? $this->last_seen->diffForHumans() : $this->created_at->diffForHumans(),
            'avatar' => $this->getFirstMediaUrl('avatar', 'thumb'),
            'status' => $this->status,
            'likes_count' => rand(1,1500),
            'shares_count' => rand(1,750),
        ];
    }
}
