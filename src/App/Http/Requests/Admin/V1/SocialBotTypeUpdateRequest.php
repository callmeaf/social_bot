<?php

namespace Callmeaf\SocialBot\App\Http\Requests\Admin\V1;

use Callmeaf\SocialBot\App\Enums\SocialBotType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class SocialBotTypeUpdateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'type' => ['required',new Enum(SocialBotType::class)]
        ];
    }
}
