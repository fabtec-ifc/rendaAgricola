<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'sobrenome' => ['nullable','string', 'max:255'],
            'rg' => ['nullable','string', 'max:255'],
            'naturalidade' => ['nullable','string', 'max:255'],
            'cpf' => ['nullable','string', 'max:255'],
            'token' => ['nullable','string', 'max:255'],
            'habilitado' => ['nullable','boolean'],
            'erros' => ['nullable','integer'],
            'idTipo_usuario' => ['nullable','integer'],
            'sexo' => ['nullable','string','max:255'],
            'nascimento' => ['nullable','string','max:255'],
            'telefone' => ['nullable','string','max:255'],
            'formacao' => ['nullable','string','max:255'],
            'municipio' => ['nullable','string','max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
