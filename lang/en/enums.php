<?php

use Callmeaf\SocialBot\App\Enums\SocialBotStatus;
use Callmeaf\SocialBot\App\Enums\SocialBotType;

return [
    SocialBotStatus::class => [
        SocialBotStatus::ACTIVE->name => 'Active',
        SocialBotStatus::INACTIVE->name => 'InActive',
        SocialBotStatus::PENDING->name => 'Pending',
    ],
    SocialBotType::class => [
        SocialBotType::BOT->name => 'Bot',
        SocialBotType::POLICE->name => 'Police'
    ],
];
