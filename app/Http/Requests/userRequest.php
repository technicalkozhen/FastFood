<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required|unique:users,email|email',
            'password'=>'required|min:6|confirmed'
        ];
    }
}
