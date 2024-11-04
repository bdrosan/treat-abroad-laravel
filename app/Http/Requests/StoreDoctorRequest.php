<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
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
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'profile_picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // max 2MB
            'email' => ['required', 'email', 'unique:doctors,email'],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'license_number' => ['nullable', 'string', 'unique:doctors,license_number'],
            'qualification' => ['required', 'in:mbbs,md,phd,dental,surgeon,other'],
            'experience_years' => ['required', 'integer', 'min:0'],
            'address' => ['nullable', 'string'],
            'dob' => ['nullable', 'date', 'before:today'],
            'gender' => ['required', 'in:male,female,other'],
            'nationality' => ['nullable', 'string', 'max:100'],
//            'languages_spoken' => ['integer'], // Assuming this is a comma-separated string
            'consultation_fee' => ['nullable', 'numeric', 'min:0'],
            'bio' => ['nullable', 'string'],
//            'working_hours' => ['nullable', 'json'], // Must be valid JSON
            'city_id' => ['required', 'exists:cities,id'], //
        ];
    }
}
