<?php

namespace Callmeaf\SocialBot\App\Http\Resources\Web\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @extends ResourceCollection<SocialBotResource>
 */
class SocialBotCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, SocialBotResource>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
