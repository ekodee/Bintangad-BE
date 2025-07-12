<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderTransactionRequest extends FormRequest
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
            //
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'post_code' => 'required|string|max:255',

            'proof' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            
            'product_ids' => 'required|array',
            'product_ids.*.id' => 'required|integer|exists:products,id',
            'product_ids.*.quantity' => 'required|integer|min:1',
        ];
    }
}
