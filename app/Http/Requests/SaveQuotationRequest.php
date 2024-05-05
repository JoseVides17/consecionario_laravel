<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveQuotationRequest extends FormRequest
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
            'client_id' => 'required',
            'client_name' => 'required',
            'client_phone' => 'required',
            'client_email' => 'required',
            'client_address' => 'required',
            'client_city' => 'required',
            'client_state' => 'required',
            'car_id' => 'required',
            'tota_price' => 'required',
        ];
    }
}
