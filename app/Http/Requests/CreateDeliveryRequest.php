<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDeliveryRequest extends FormRequest
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
            'customer_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'sender_address' => 'required|max:255',
            'delivery_address' => 'required|max:255',

            'parcel_width' => 'required|integer',
            'parcel_height' => 'required|integer',
            'parcel_length' => 'required|integer',
            'parcel_weight' => 'required|integer',

            'deliveryService' => 'required',
        ];
    }
}
