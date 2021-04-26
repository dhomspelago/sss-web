<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => [
                'required',
                'string',
                'max:255',
            ],
            'middle_name' => [
                'required',
                'string',
                'max:255',
            ],
            'last_name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
            'password' => [
                'required',
                'string',
                'confirmed',
                ' min:8',
            ],
            'date_of_birth' => [
                'required',
                'date',
            ],
            'place_of_birth' => [
                'required',
                'max:255',
            ],
            'gender' => [
                'required',
                'string',
                Rule::in('male', 'female'),
            ],
            'civil_status' => [
                'required',
                'string',
                Rule::in('single', 'married', 'divorced', 'separated', 'widowed'),
            ],
            'nationality' => [
                'required',
                'string',
                'max:255',
            ],
            'religion' => [
                'required',
                'string',
                'max:255',
            ],
            'home_address' => [
                'required',
                'string',
            ],
            'baranggay' => [
                'required',
                'string',
                'max:255',
            ],
            'district' => [
                'required',
                'string',
                'max:255',
            ],
            'locality' => [
                'required',
                'string',
                'max:255',
            ],
            'zip_code' => [
                'required',
                'numeric',
            ],
            'mobile_number' => [
                'required',
                'numeric',
                'min:11',
            ],
        ];
    }
}
