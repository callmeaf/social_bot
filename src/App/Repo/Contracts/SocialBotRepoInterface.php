<?php

namespace Callmeaf\SocialBot\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\SocialBot\App\Models\SocialBot;
use Callmeaf\SocialBot\App\Http\Resources\Api\V1\SocialBotCollection;
use Callmeaf\SocialBot\App\Http\Resources\Api\V1\SocialBotResource;

/**
 * @extends BaseRepoInterface<SocialBot,SocialBotResource,SocialBotCollection>
 */
interface SocialBotRepoInterface extends BaseRepoInterface
{

}
