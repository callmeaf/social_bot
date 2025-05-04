<?php

namespace Callmeaf\SocialBot\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Callmeaf\Base\App\Traits\Model\HasDate;
use Callmeaf\Base\App\Traits\Model\HasStatus;
use Callmeaf\Base\App\Traits\Model\HasType;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialBot extends BaseModel
{
     use SoftDeletes;
    use HasStatus,HasType,HasDate;
    protected $fillable = [
        'social_id',
        'status',
        'type',
        'name',
        'token'
    ];

    public static function configKey(): string
    {
        return 'callmeaf-social-bot';
    }

    protected function casts(): array
    {
        return [
            ...(self::config()['enums'] ?? []),
        ];
    }
}
