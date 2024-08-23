<?php

namespace App\Http\Requests;

use App\Models\posts\Post;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'=> 'required|min:3',
            'slug'=>['required', 'max:255' ,'unique:'.Post::class ],
            'category'=>'required|min:3',
            'content'=>'required|min:3',
        ];
    }
}
