<?php

namespace App\Http\Requests;

use App\Customer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('customers')->ignore($this->route('customer'))],
            'phone' => ['nullable', 'string', 'min:11', 'max:20'],
            'company_id' => ['required', 'exists:companies,id'],
            'active' => ['required']
        ];
    }
}
