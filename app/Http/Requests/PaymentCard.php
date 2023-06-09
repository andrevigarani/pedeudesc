<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentCard extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'card_number' => 'string|required',
            'cpf_client' => 'string|required',
            'card_expire_date' => 'string|required',
            'cvv_card' => 'string|required',
        ];
    }

    public function validate(array $rules, ...$params): array
    {
        ddd('chegou');
        return parent::validate($rules, $params); // TODO: Change the autogenerated st
    }
}
