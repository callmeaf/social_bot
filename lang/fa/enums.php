<?php

use Callmeaf\SocialBot\App\Enums\SocialBotStatus;
use Callmeaf\SocialBot\App\Enums\SocialBotType;

return [
    SocialBotStatus::class => [
        SocialBotStatus::ACTIVE->name => 'فعال',
        SocialBotStatus::INACTIVE->name => 'غیر فعال',
        SocialBotStatus::PENDING->name => 'در انتظار',
    ],
    SocialBotType::class => [
        SocialBotType::BOT->name => 'بات',
        SocialBotType::POLICE->name => 'پلیس'
    ],
];
