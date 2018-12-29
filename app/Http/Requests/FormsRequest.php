<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
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
            // Personal Details
    		'fullname' => 'required|string',
    		'nationality' => 'required|string',
    		'date_of_birth' => 'required|date',
    		'passport_number' => 'required|string',
    		'issuing_country' => 'required|string',
    		'date_of_issue' => 'required|date',
    		'date_of_expiry' => 'required|date',
    		'blood_type' => 'required|string',
    		'marital_status' => 'required|string',
    		'address' => 'required|string',
    		'city' => 'required|string',
    		'postal_code' => 'required|numeric',
    		'province' => 'required|string',
    		'country' => 'required|string',
    		'phone' => 'required|string',
    		'mobile' => 'required|string',
    		'email' => 'required|email',
    		'address2' => 'nullable|text',
    		'city2' => 'nullable|string',
    		'postal_code2' => 'nullable|numeric',
    		'province2' => 'nullable|string',
    		'country2' => 'nullable|string',
    		'phone2' => 'nullable|string',
    		'contact_name' => 'nullable|string',

    		// Home Institution
    		'name' => 'required|string',
    		'address' => 'required|string',
    		'phone' => 'required|string',
    		'email' => 'required|email',
    		'website' => 'required|string',
    		'faculty_dep' => 'required|string',
    		'start_year' => 'required|string',
    		'gpa' => 'required|string',

    		// Proposed Study
    		'semester' => 'required|in:Semester I (Aug-Jan),Semester II (Feb-Jun)',
    		'academic_year' => 'required|string',
    		'faculty' => 'required|string',
    		'department' => 'required|string',
    		'study_period' => 'required|string',
    		'start_date' => 'required|date',
    		'end_date' => 'required|date',
    		// Course
    		'course_title' => 'required|string',
    		'credit' => 'required|string',

    		// English Test Result
    		'test' => 'required|string',
    		'score' => 'required|numeric',
    		'test_center' => 'required|string',	 
    		'date_tested' => 'required|date',

    		// Insurance
    		'insurance_name' => 'required|string',
    		'validity' => 'required|date',
    		'cover' => 'required|string',

    		// Accomodation
    		'accomodation_help' => 'required|in:YES,NO',
    		'adress' => 'required|string',
    		'contact_person' => 'required|string',

    		// Contact of Emergency
    		'fullname' => 'required|string',
    		'relationship' => 'required|string',
    		'address' => 'required|string',
    		'phone' => 'required|string',
    		'mobile' => 'required|string',
    		'email' => 'required|email'
        ];
    }



     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
        ];
    }
}
