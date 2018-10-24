<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
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
    	$pdf = PDF::loadView('print');
    	return $pdf->download('Form UP-SA.pdf');
    	set_time_limit(12000);
    }

    public function test() {
    	return view('test');
    }

    public function testPrint() {
    	$pdf = PDF::loadView('test');
    	return $pdf->download('test.pdf');
    }

    public function submit() {

    	$request->validate([
    		// Personal Details
    		'name' => 'required|string',
    		'nationality' => 'required|string',
    		'dob' => 'required|string',
    		'passport' => 'required|string',
    		'is_country' => 'required|string',
    		'doi' => 'required|string',
    		'doe' => 'required|string',
    		'blood' => 'required|string',
    		'maritial' => 'required|string',
    		'address' => 'required|string',
    		'city' => 'required|string',
    		'postal' => 'required|numeric',
    		'state' => 'required|string',
    		'country' => 'required|string',
    		'phone' => 'required|string',
    		'mobile' => 'required|string',
    		'email' => 'required|email',
    		'address2' => 'nullable|text',
    		'city2' => 'nullable|string',
    		'postal2' => 'nullable|numeric',
    		'state2' => 'nullable|string',
    		'country2' => 'nullable|string',
    		'phone2' => 'nullable|string',
    		'contact_name' => 'required|string',

    		// Home Institution
    		'institution' => 'required|string',
    		'i_address' => 'required|string',
    		'i_phone' => 'required|string',
    		'i_email' => 'required|email',
    		'web' => 'required|string',
    		'faculty_dept' => 'required|string',
    		's_year' => 'required|string',
    		'gpa' => 'required|string',

    		// Proposed Study
    		'duration' => 'required|in:Semester I (Aug-Jan),Semester II (Feb-Jun)',
    		'faculty' => 'required|string',
    		'department' => 'required|string',
    		'spesific_period' => 'required|string',
    		'start_date' => 'required|string',
    		'end_date' => 'required|string',
    		// Course
    		'course_1' => 'required|string',
    		'credit_1' => 'required|string',
    		'course_2' => 'required|string',
    		'credit_2' => 'required|string',
    		'course_3' => 'required|string',
    		'credit_3' => 'required|string',
    		'course_4' => 'required|string',
    		'credit_4' => 'required|string',
    		'course_5' => 'required|string',
    		'credit_5' => 'required|string',
    		'course_6' => 'required|string',
    		'credit_6' => 'required|string',
    		'course_7' => 'required|string',
    		'credit_7' => 'required|string',

    		// English Test Result
    		'toefl' => 'required|string',
    		'score_toefl' => 'required|numeric',
    		'place_toefl' => 'required|string',
    		'date_toefl' => 'required|string',
    		'ielts' => 'required|string',
    		'score_ielts' => 'required|numeric',
    		'place_ielts' => 'required|string',
    		'date_ielts' => 'required|string',
    		'others' => 'required|string',
    		'score_others' => 'required|numeric',
    		'place_others' => 'required|string',
    		'date_others' => 'required|string',

    		// Insurance
    		'insurance' => 'required|string',
    		'valid_date' => 'required|string',
    		'cover' => 'required|string',

    		// Accomodation
    		'opt_acc' => 'required|in:YES,NO',
    		'adress_acc' => 'required|string',
    		'cp_acc' => 'required|string',

    		// Contact of Emergency
    		'emergency_name' => 'required|string',
    		'relationsip' => 'required|string',
    		'address_emergency' => 'required|string',
    		'emergency_phone' => 'required|string',
    		'emergency_mobile' => 'required|string',
    		'emergency_email' => 'required|email',


    	]);

    	PersonalDetails::create([
    		'name' => $request->input('name'),
    		'nationality' => $request->input('nationality'),
    		'dob' => $request->input('dob'),
    		'passport' => $request->input('passport'),
    		'is_country' => $request->input('is_country'),
    		'doi' => $request->input('doi'),
    		'doe' => $request->input('doe'),
    		'blood' => $request->input('blood'),
    		'maritial' => $request->input('maritial'),
    		'address' => $request->input('address'),
    		'city' => $request->input('city'),
    		'postal' => $request->input('postal'),
    		'state' => $request->input('state'),
    		'country' => $request->input('country'),
    		'phone' => $request->input('phone'),
    		'mobile' => $request->input('mobile'),
    		'email' => $request->input('email'),
    		'address2' => $request->input('address2'),
    		'city2' => $request->input('city2'),
    		'postal2' => $request->input('postal2'),
    		'state2' => $request->input('state2'),
    		'country2' => $request->input('country2'),
    		'phone2' => $request->input('phone2'),
    		'contact_name' => $request->input('contact_name'),
    	]);

    	HomeInstitution::create([
    		'institution' =>  $request->input('institution'),
    		'i_address' =>  $request->input('i_address'),
    		'i_phone' =>  $request->input('i_phone'),
    		'i_email' =>  $request->input('i_email'),
    		'web' =>  $request->input('web'),
    		'faculty_dept' =>  $request->input('faculty_dept'),
    		's_year' =>  $request->input('s_year'),
    		'gpa' =>  $request->input('gpa'),
    	]);

    	// ProposedStudy::create([
    	// 	'duration' => 'required|in:Semester I (Aug-Jan),Semester II (Feb-Jun)',
    	// 	'faculty' => 'required|string',
    	// 	'department' => 'required|string',
    	// 	'spesific_period' => 'required|string',
    	// 	'start_date' => 'required|string',
    	// 	'end_date' => 'required|string',
    	// ]);
    }
}
