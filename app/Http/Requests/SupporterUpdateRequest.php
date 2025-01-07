<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupporterUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'area_id' => ['required'],
            'work_id' => ['required'],
            'condition_id' => ['required'],
        ];
    }
}
