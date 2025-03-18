<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParkingRequest extends FormRequest
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
            'nom_parking'=>'bail|required|string|max:50',
            'adresse'=>'bail|required|string|max:50',
            'nombre_place'=>'bail|required|integer|min:2',
            'solde'=>'bail|required|numeric'
        ];
    }
}
