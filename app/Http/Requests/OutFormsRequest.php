<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OutFormsRequest extends FormRequest
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
            //Personal Information
            'student_number' => 'required|string',
            'name' => 'required|string',
            'gender' => 'required|in:Male, Female',
            'place_of_birth' => 'required|string',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string',
            'religion' => 'required|string',
            'passport_number' => 'required|string',
            'expire_of_passport' => 'required|date',

            //Contact Information
            'email' => 'required|email',
            'mobile_number' => 'required|string',
            'telphone' => 'required|string',
            'address' => 'required|string',

            //Applicant Details
            'program' => 'required|in:Student Exchange,Internship,Summer Program',
            'period' => 'required|in:1-2 months,1 semester(4-6 months),2 semester(up to 12 months)',
            'host_univ' => 'required|string',

            //Course
            'course_1' => 'required|string',
            'credit_1' => 'required|string',
            'course_2' => 'nullable|string',
            'credit_2' => 'nullable|string',
            'course_3' => 'nullable|string',
            'credit_3' => 'nullable|string',
            'course_4' => 'nullable|string',
            'credit_4' => 'nullable|string',
            'course_5' => 'nullable|string',
            'credit_5' => 'nullable|string',
            'course_6' => 'nullable|string',
            'credit_6' => 'nullable|string',
            'course_7' => 'nullable|string',
            'credit_7' => 'nullable|string',

            //Academic Information
            'department' =>'required|string',
            'year_sem' =>'required|string',
            'gpa' =>'required|string',
            'toefl_ielts' =>'required|string',
            'date_toefl_ielts' =>'required|date',

            //Membership and Organization ACtivities
            'org_1' => 'required|string',
            'year_org_1' => 'required|string',
            'org_2' => 'nullable|string',
            'year_org_2' => 'nullable|string',
            'org_3' => 'nullable|string',
            'year_org_3' => 'nullable|string',

            //Achievment/Award
            'award_1' => 'required|string',
            'institut_1' => 'required|string',
            'year_award_1' => 'required|string',
            'award_2' => 'nullable|string',
            'institut_2' => 'nullable|string',
            'year_award_2' => 'nullable|string',
            'award_3' => 'nullable|string',
            'institut_3' => 'nullable|string',
            'year_award_3' => 'nullable|string',

            //Parent/Guardian Contact
            'emergency_name' => 'required|string',
            'relationship' => 'required|string',
            'emergency_address' => 'required|string',
            'emergency_phone' => 'required|string',
            'emergency_mobile' => 'required|string',
            'emergency_email' =>'required|email',

            //Purpose And Motivation Statement
            'motivation' =>'required|string'
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
