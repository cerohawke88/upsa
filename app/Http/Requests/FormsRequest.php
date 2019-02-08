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
    		'name' => 'required|string',
    		'nationality' => 'required|string',
    		'date_of_birth' => 'required|string',
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
    		// 'address2' => 'nullable|text',
    		// 'city2' => 'nullable|string',
    		// 'postal_code2' => 'nullable|numeric',
    		// 'province2' => 'nullable|string',
    		// 'country2' => 'nullable|string',
    		// 'phone2' => 'nullable|string',
    		// 'contact_name' => 'nullable|string',

    		// Home Institution
    		'institution' => 'required|string',
    		'institution_address' => 'required|string',
    		'institution_phone' => 'required|string',
    		'institution_email' => 'required|email',
    		'institution_web' => 'required|string',
    		'faculty_dept' => 'required|string',
    		'start_year' => 'required|string',
    		'gpa' => 'required|string',

    		// Proposed Study
    		'duration' => 'required|in:Semester I (Aug-Jan),Semester II (Feb-Jun)',
    		'year1' => 'required|string',
    		'year2' => 'required|string',
    		'faculty' => 'required|string',
    		'department' => 'required|string',
    		'study_period' => 'required|string',
    		'start_date' => 'required|date',
			'end_date' => 'required|date',
			
    		// Course
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

    		// English Test Result
    		'toefl' => 'required|string',
    		'score_toefl' => 'required|numeric',
    		'place_toefl' => 'required|string',	 
    		'date_toefl' => 'required|date',
    		'ielts' => 'required|string',
    		'score_ielts' => 'required|numeric',
    		'place_ielts' => 'required|string',	 
    		'date_ielts' => 'required|date',
    		'others' => 'nullable|string',
    		'score_others' => 'nullable|numeric',
    		'place_others' => 'nullable|string',	 
    		'date_others' => 'nullable|date',

    		// Insurance
    		'insurance' => 'required|string',
    		'valid_date' => 'required|date',
    		'cover' => 'required|string',

    		// Accomodation
    		'opt_acc' => 'required|in:YES,NO',
    		'address_acc' => 'sometimes|nullable|required_if:opt_acc,NO|string',
        	'cp_acc' => 'sometimes|nullable|required_if:opt_acc,NO|string',

    		// Contact of Emergency
    		'emergency_name' => 'required|string',
    		'relationship' => 'required|string',
    		'emergency_address' => 'required|string',
    		'emergency_phone' => 'required|string',
    		'emergency_mobile' => 'required|string',
			'emergency_email' => 'required|email',
			
			// files
			'certificate_of_health' => 'required|file|mimes:pdf|max:2048',
			'financial_guarantee' => 'required|file|mimes:pdf|max:2048',
			'statement_of_legality' => 'required|file|mimes:pdf|max:2048',
			'certificate_of_enrollment' => 'required|file|mimes:pdf|max:2048',
			'nomination_letter' => 'required|file|mimes:pdf|max:2048',
			'transcript' => 'required|file|mimes:pdf|max:2048',
			'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
			'statement_of_purpose' => 'required|file|mimes:pdf|max:2048',
			'bank_statement' => 'required|file|mimes:pdf|max:2048',
			'cv' => 'required|file|mimes:pdf|max:2048',
			'passport' => 'required|file|mimes:pdf|max:2048',
			'student_id' => 'required|file|mimes:pdf|max:2048',
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
