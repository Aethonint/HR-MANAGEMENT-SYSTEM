<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // ===== USER TABLE FIELDS =====
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'role'       => ['required', Rule::in(['SuperAdmin', 'HRManager', 'AccountsManager', 'Admin', 'Staff'])],
            'status'     => ['required', Rule::in(['active', 'inactive', 'suspended', 'pending'])],
            'department_id' => ['nullable', 'integer', 'exists:departments,id'],
            'employee_id'   => ['nullable', 'integer'],
            'joining_date'  => ['nullable', 'date'],
            'start_date'    => ['nullable', 'date'],

            // ===== PROFILE TABLE FIELDS =====
            'employee_no'               => ['nullable', 'string', 'max:50'],
            'phone'                     => ['nullable', 'string', 'max:20'],
            'address'                   => ['nullable', 'string', 'max:255'],
            'dob'                       => ['nullable', 'date'],
            
            'employment_type'           => ['required', Rule::in(['employee', 'self-employed'])],
            'emergency_contact_name'    => ['nullable', 'string', 'max:255'],
            'emergency_contact_relation'=> ['nullable', 'string', 'max:255'],
            'emergency_contact_phone'   => ['nullable', 'string', 'max:20'],
            'document_status_percentage'=> ['nullable', 'numeric', 'between:0,100'],
            'country'                   => ['nullable', 'string', 'max:100'],
            'profile_picture'           => ['nullable', 'image'], // 2MB limit for images
        ];
    }

    /**
     * Authorize the request.
     */
    public function authorize(): bool
    {
        return true; // Add logic if you need permission checks
    }
}
