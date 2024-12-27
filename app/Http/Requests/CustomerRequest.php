<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'cpf' => 'required|min:11',
        ];
    }

    public function messages(): array{
        return [
            'name.required' => 'Campo nome é obrigatorio',
            'phone.required' => 'Campo telefone é obrigatorio',
            'email.required' => 'Campo email é obrigatorio',
            'email.email' => 'Campo email deve ser um email',
            'cpf' => 'Campo cpf deve ser um CPF',
            'cpf.min' => 'Campo cpf deve ter 11 caracteres',
        ];
    }
}
