<?php

namespace Callmeaf\SocialBot\App\Http\Resources\Api\V1;

use Callmeaf\SocialBot\App\Models\SocialBot;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read SocialBot $resource
 */
class SocialBotResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'social_id' => $this->social_id,
            'status' => $this->status,
            'status_text' => $this->statusText,
            'type' => $this->type,
            'type_text' => $this->typeText,
            'name' => $this->name,
//            'token' => $this->token,
            'footer' => $this->footer,
            'footer_text' => $this->footerText,
            'created_at' => $this->created_at,
            'created_at_text' => $this->createdAtText(),
            'updated_at' => $this->updated_at,
            'updated_at_text' => $this->updatedAtText(),
            'deleted_at' => $this->deleted_at,
            'deleted_at_text' => $this->deletedAtText(),
        ];
    }
}
