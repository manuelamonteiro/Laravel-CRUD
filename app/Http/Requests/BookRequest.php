<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required',
            'pages' => 'required|numeric',
            'price' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=> 'Coloque um Título!',
            'pages.required'=> 'Coloque a quantidade de páginas!',
            'price.required'=> 'Coloque o preço!',
            'pages.numeric'=> 'A quantidade de páginas deve ser um número!',
            'price.numeric'=> 'O preço deve ser um número!',
        ];
    }
}
