<?php

namespace Callmeaf\SocialBot\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Callmeaf\Base\App\Traits\Model\HasDate;
use Callmeaf\Base\App\Traits\Model\HasStatus;
use Callmeaf\Base\App\Traits\Model\HasType;
use Callmeaf\Social\App\Enums\SocialType;
use Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface;
use Callmeaf\Social\App\Strategy\Contracts\SocialBotConfig;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialBot extends BaseModel implements SocialBotConfig
{
     use SoftDeletes;
    use HasStatus,HasType,HasDate;
    protected $fillable = [
        'social_id',
        'status',
        'type',
        'name',
        'token',
        'footer',
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

    public function social(): BelongsTo
    {
        /**
         * @var SocialRepoInterface $socialRepo
         */
        $socialRepo = app(SocialRepoInterface::class);
        return $this->belongsTo($socialRepo->getModel()::class);
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getApiUrl(): string
    {
        return match($this->social->type) {
          SocialType::TELEGRAM => "https://api.telegram.org/bot",
        };
    }

    public function getChatId(): string
    {
        return "@" . $this->social->chat_id;
    }
}
