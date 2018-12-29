<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormsRequest;
use PDF;
use DB;
use App\Accomodation;
use App\Course;
use App\EmergencyContact;
use App\EnglishTestResult;
use App\HomeInstitution;
use App\Insurance;
use App\PersonalDetails;
use App\ProposedStudy;

class FormController extends Controller
{

	public function form() {
		return view('print');
	}

    public function print() {
    	// $pdf = PDF::loadView('print');
    	// return $pdf->download('Form UP-SA.pdf');
    	// set_time_limit(12000);
        echo "<script> window.print(); </script>";
    }

    public function test() {
		return view('test');
    }
	
    public function testPrint() {
		$pdf = PDF::loadView('test');
    	return $pdf->download('test.pdf');
    }
	
    public function submit(FormsRequest $request) {
		
		// dd($request->all());

		$validated = $request->validated();

    	PersonalDetails::create([
    		'fullname' => $request->input('name'),
    		'nationality' => $request->input('nationality'),
    		'date_of_birth' => $request->input('dob'),
    		'passport_number' => $request->input('passport'),
    		'issuing_country' => $request->input('is_country'),
    		'date_of_issue' => $request->input('doi'),
    		'date_of_expiry' => $request->input('doe'),
    		'blood_type' => $request->input('blood'),
    		'marital_status' => $request->input('maritial'),
    		'address' => $request->input('address'),
    		'city' => $request->input('city'),
    		'postal_code' => $request->input('postal'),
    		'province' => $request->input('state'),
    		'country' => $request->input('country'),
    		'phone' => $request->input('phone'),
    		'mobile' => $request->input('mobile'),
    		'email' => $request->input('email'),
    		'address2' => $request->input('address2'),
    		'city2' => $request->input('city2'),
    		'postal_code2' => $request->input('postal2'),
    		'province2' => $request->input('state2'),
    		'country2' => $request->input('country2'),
    		'phone2' => $request->input('phone2'),
    		'contact_name' => $request->input('contact_name'),
		]);
		

    	HomeInstitution::create([
    		'name' =>  $request->input('institution'),
    		'address' =>  $request->input('i_address'),
    		'phone' =>  $request->input('i_phone'),
    		'email' =>  $request->input('i_email'),
    		'website' =>  $request->input('web'),
    		'faculty_dep' =>  $request->input('faculty_dept'),
    		'start_year' =>  $request->input('s_year'),
    		'gpa' =>  $request->input('gpa'),
    	]);

    	ProposedStudy::create([
    		'semester' => $request->input('duration'),
    		'academic_year' => $request->input('f_year') . '/' . $request->input('l_year'),
    		'faculty' => $request->input('faculty'),
    		'department' => $request->input('department'),
    		'study_period' => $request->input('spesific_period'),
    		'start_date' => $request->input('start_date'),
    		'end_date' => $request->input('end_date'),
    	]);

    	Course::create([
    		'course_title' => $request->input('course_1'),
    		'credit' => $request->input('credit_1'),
    	]);

    	EnglishTestResult::create([
    		'test' => $request->input('toefl'),
    		'score' => $request->input('score_toefl'),
    		'test_center' => $request->input('place_toefl'),	 
    		'date_tested' => $request->input('date_toefl'),
    	]);

    	Insurance::create([
    		'insurance_name' => $request->input('insurance'),
    		'validity' => $request->input('valid_date'),
    		'cover' => $request->input('cover'),
    	]);

    	Accomodation::create([
    		'accomodation_help' => $request->input('opt_acc'),
    		'adress' => $request->input('adress_acc'),
    		'contact_person' => $request->input('cp_acc'),
    	]);

    	EmergencyContact::create([
    		'fullname' => $request->input('emergency_name'),
    		'relationship' => $request->input('relationship'),
    		'address' => $request->input('address_emergency'),
    		'phone' => $request->input('emergency_phone'),
    		'mobile' => $request->input('emergency_mobile'),
    		'email' => $request->input('emergency_email'),
    	]);

    	return back()-> with('success', 'Berhasil submit!');
    }
}
