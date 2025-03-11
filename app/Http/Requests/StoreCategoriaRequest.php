<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
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
            'descricao' => 'required|min:3|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'descricao.required' => 'É necessário adicionar uma Descrição a Categoria',
            'descricao.min' => 'A Descrição precisa ter no mínimo 3 Caractéres',
            'descricao.max' => 'A Descrição pode ter no máximo 255 Caractéres',

        ];
    }
}
