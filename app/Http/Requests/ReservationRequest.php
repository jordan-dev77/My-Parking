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
        return false;
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
            'marque'=>'bail|required|string|max:50',
            'type vehicule'=>'bail|required|max:50',
            'date arriver'=>'bail|required|date|before_or_equal:today',
            'date depart'=>'bail|nullable|date|after:date_arriver'

        ];
    }
}
