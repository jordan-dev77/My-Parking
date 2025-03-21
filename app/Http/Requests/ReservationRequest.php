<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'immatriculation'=>'bail|required|string|between:10,15',
            'marque_vehicule'=>'string|max:50',
            'type_vehicule'=>'bail|required|max:50',
            'date_arriver'=>'bail|required|date|before_or_equal:today',
            'date_depart'=>'bail|nullable|date|after:date_arriver'

        ];
    }
}
