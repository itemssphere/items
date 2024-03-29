<?php

namespace App\Http\Requests\Api\Reviews;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Api\Reviews\ReviewRequestContract;

class ReviewStoreRequest extends ReviewRequestContract
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //'message' => 'required|string|max:255',
            //'rating' => 'numeric|min:1|max:5',
        ];
    }
}
