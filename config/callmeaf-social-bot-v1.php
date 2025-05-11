<?php

use Callmeaf\Base\App\Enums\RequestType;

return [
    'model' => \Callmeaf\SocialBot\App\Models\SocialBot::class,
    'route_key_name' => 'id',
    'repo' => \Callmeaf\SocialBot\App\Repo\V1\SocialBotRepo::class,
    'resources' => [
        RequestType::API->value => [
            'resource' => \Callmeaf\SocialBot\App\Http\Resources\Api\V1\SocialBotResource::class,
            'resource_collection' => \Callmeaf\SocialBot\App\Http\Resources\Api\V1\SocialBotCollection::class,
        ],
        RequestType::WEB->value => [
            'resource' => \Callmeaf\SocialBot\App\Http\Resources\Web\V1\SocialBotResource::class,
            'resource_collection' => \Callmeaf\SocialBot\App\Http\Resources\Web\V1\SocialBotCollection::class,
        ],
        RequestType::ADMIN->value => [
            'resource' => \Callmeaf\SocialBot\App\Http\Resources\Admin\V1\SocialBotResource::class,
            'resource_collection' => \Callmeaf\SocialBot\App\Http\Resources\Admin\V1\SocialBotCollection::class,
        ],
    ],
    'events' => [
        RequestType::API->value => [
            \Callmeaf\SocialBot\App\Events\Api\V1\SocialBotIndexed::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Api\V1\SocialBotCreated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Api\V1\SocialBotShowed::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Api\V1\SocialBotUpdated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Api\V1\SocialBotDeleted::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Api\V1\SocialBotStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Api\V1\SocialBotTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::WEB->value => [
            \Callmeaf\SocialBot\App\Events\Web\V1\SocialBotIndexed::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Web\V1\SocialBotCreated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Web\V1\SocialBotShowed::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Web\V1\SocialBotUpdated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Web\V1\SocialBotDeleted::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Web\V1\SocialBotStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Web\V1\SocialBotTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::ADMIN->value => [
            \Callmeaf\SocialBot\App\Events\Admin\V1\SocialBotIndexed::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Admin\V1\SocialBotCreated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Admin\V1\SocialBotShowed::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Admin\V1\SocialBotUpdated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Admin\V1\SocialBotDeleted::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Admin\V1\SocialBotStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\SocialBot\App\Events\Admin\V1\SocialBotTypeUpdated::class => [
                // listeners
            ],
        ],
    ],
    'requests' => [
        RequestType::API->value => [
            'index' => \Callmeaf\SocialBot\App\Http\Requests\Api\V1\SocialBotIndexRequest::class,
            'store' => \Callmeaf\SocialBot\App\Http\Requests\Api\V1\SocialBotStoreRequest::class,
            'show' => \Callmeaf\SocialBot\App\Http\Requests\Api\V1\SocialBotShowRequest::class,
            'update' => \Callmeaf\SocialBot\App\Http\Requests\Api\V1\SocialBotUpdateRequest::class,
            'destroy' => \Callmeaf\SocialBot\App\Http\Requests\Api\V1\SocialBotDestroyRequest::class,
            'statusUpdate' => \Callmeaf\SocialBot\App\Http\Requests\Api\V1\SocialBotStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\SocialBot\App\Http\Requests\Api\V1\SocialBotTypeUpdateRequest::class,
        ],
        RequestType::WEB->value => [
            'index' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotIndexRequest::class,
            'create' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotCreateRequest::class,
            'store' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotStoreRequest::class,
            'show' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotShowRequest::class,
            'edit' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotEditRequest::class,
            'update' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotUpdateRequest::class,
            'destroy' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotDestroyRequest::class,
            'statusUpdate' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\SocialBot\App\Http\Requests\Web\V1\SocialBotTypeUpdateRequest::class,
        ],
        RequestType::ADMIN->value => [
            'index' => \Callmeaf\SocialBot\App\Http\Requests\Admin\V1\SocialBotIndexRequest::class,
            'store' => \Callmeaf\SocialBot\App\Http\Requests\Admin\V1\SocialBotStoreRequest::class,
            'show' => \Callmeaf\SocialBot\App\Http\Requests\Admin\V1\SocialBotShowRequest::class,
            'update' => \Callmeaf\SocialBot\App\Http\Requests\Admin\V1\SocialBotUpdateRequest::class,
            'destroy' => \Callmeaf\SocialBot\App\Http\Requests\Admin\V1\SocialBotDestroyRequest::class,
            'statusUpdate' => \Callmeaf\SocialBot\App\Http\Requests\Admin\V1\SocialBotStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\SocialBot\App\Http\Requests\Admin\V1\SocialBotTypeUpdateRequest::class,
        ],
    ],
    'controllers' => [
        RequestType::API->value => [
            'social_bot' => \Callmeaf\SocialBot\App\Http\Controllers\Api\V1\SocialBotController::class,
        ],
        RequestType::WEB->value => [
            'social_bot' => \Callmeaf\SocialBot\App\Http\Controllers\Web\V1\SocialBotController::class,
        ],
        RequestType::ADMIN->value => [
            'social_bot' => \Callmeaf\SocialBot\App\Http\Controllers\Admin\V1\SocialBotController::class,
        ],
    ],
    'routes' => [
        RequestType::API->value => [
            'prefix' => 'social_bots',
            'as' => 'social_bots.',
            'middleware' => [
                'auth:sanctum'
            ],
        ],
        RequestType::WEB->value => [
            'prefix' => 'social_bots',
            'as' => 'social_bots.',
            'middleware' => [],
        ],
        RequestType::ADMIN->value => [
            'prefix' => 'social_bots',
            'as' => 'social_bots.',
            'middleware' => [
                "auth:sanctum",
                "role:" . \Callmeaf\Role\App\Enums\RoleName::SUPER_ADMIN->value,
            ],
        ],
    ],
    'enums' => [
         'status' => \Callmeaf\SocialBot\App\Enums\SocialBotStatus::class,
         'type' => \Callmeaf\SocialBot\App\Enums\SocialBotType::class,
    ],
     'exports' => [
        RequestType::API->value => [
            'excel' => \Callmeaf\SocialBot\App\Exports\Api\V1\SocialBotsExport::class,
        ],
        RequestType::WEB->value => [
            'excel' => \Callmeaf\SocialBot\App\Exports\Web\V1\SocialBotsExport::class,
        ],
        RequestType::ADMIN->value => [
            'excel' => \Callmeaf\SocialBot\App\Exports\Admin\V1\SocialBotsExport::class,
        ],
     ],
     'imports' => [
         RequestType::API->value => [
             'excel' => \Callmeaf\SocialBot\App\Imports\Api\V1\SocialBotsImport::class,
         ],
         RequestType::WEB->value => [
             'excel' => \Callmeaf\SocialBot\App\Imports\Web\V1\SocialBotsImport::class,
         ],
         RequestType::ADMIN->value => [
             'excel' => \Callmeaf\SocialBot\App\Imports\Admin\V1\SocialBotsImport::class,
         ],
     ],
];
