<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            //Mettere regole
            'name' => ['required', 'min:3', 'max:150'],
            'project_created_at' => ['required'],
            'languages_programming_used' => ['required', 'min:2', 'max:200'],
            'image_url' => ['nullable']

        ];
    }

}
