<?php

namespace App\Http\Requests\ProjectPayments;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'project_id' => 'required|max:255',
            'description' => 'nullable|max:255',
            'babat_id' => 'nullable|max:255',
            'approved_description' => 'nullable|max:255',
            'accountant_description' => 'nullable|max:255'
        ];
    }
}
