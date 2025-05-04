<?php

namespace Callmeaf\SocialBot\App\Enums;


use Callmeaf\Base\App\Enums\BaseStatus;

enum SocialBotStatus: string
{
    case ACTIVE = BaseStatus::ACTIVE->value;
    case INACTIVE = BaseStatus::INACTIVE->value;
    case PENDING = BaseStatus::PENDING->value;
}
