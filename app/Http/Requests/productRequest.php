<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
        if(in_array($this->method(),['PUT','PATCH'])){
            return [
                'name'=>'required',
                'price'=>'required',
                'file'=>'nullable|mimes:jpg,png,jpeg'
            ];
        }else{
            return [
                'name'=>'required',
                'price'=>'required',
                'file'=>'required|mimes:jpg,png,jpeg'
            ];
        }
    }
}
