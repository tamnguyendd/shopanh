<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'first_name'    => 'required|max:50',
            'last_name'     => 'required|max:50',
            'phone_number'  => 'required|max:9999999999999|numeric',
            'post_code'     => 'required|max:8',
            'address'       => 'required',
            'city'          => 'required',
            'state'         => 'required',
            'country'       => 'required',
            'name_on_card'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'     => 'The fisrt name is required!',
            'first_name.max'          => 'The fisrt name can not be more than 50 characters!',
            'last_name.required'      => 'The last name is required!',
            'last_name.max'           => 'The last name can not be more than 50 characters!',
            'phone_number.required'   => 'The phone number is required!',
            'phone_number.max'        => 'The phone number can not be more than 13 characters!',
            'phone_number.numeric'    => 'The phone number must contain between 10-13 digits, without the hyphen!',
            'post_code.max'           => 'The post code can not be more than 13 characters!',
            'post_code.required'      => 'The post code is required!',
            'state.required'          => 'The prefecture is required!',
            'name_on_card.required'   => 'Please put name on your card!',
        ];
    }
}
