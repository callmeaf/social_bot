<?php

namespace Callmeaf\SocialBot\App\Http\Requests\Admin\V1;

use Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface;
use Callmeaf\SocialBot\App\Enums\SocialBotStatus;
use Callmeaf\SocialBot\App\Enums\SocialBotType;
use Callmeaf\SocialBot\App\Repo\Contracts\SocialBotRepoInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class SocialBotUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(SocialRepoInterface $socialRepo,SocialBotRepoInterface $socialBotRepo): array
    {
        return [
            'social_id' => ['required',Rule::exists($socialRepo->getTable(),$socialRepo->getModel()->getKeyName())],
            'status' => ['required',new Enum(SocialBotStatus::class)],
            'type' => ['required',new Enum(SocialBotType::class)],
            'name' => ['required','string'],
            'token' => ['required','string',Rule::unique($socialBotRepo->getTable(),'token')->where('type',$this->get('type'))->ignore($this->route('social_bot'))],
            'footer' => ['nullable','string'],
        ];
    }
}
