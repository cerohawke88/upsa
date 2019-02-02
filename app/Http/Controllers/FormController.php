<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormsRequest;
use PDF;
use App\Accomodation;
use App\Course;
use App\EmergencyContact;
use App\EnglishTestResult;
use App\HomeInstitution;
use App\Insurance;
use App\PersonalDetails;
use App\ProposedStudy;
use Validator;
class FormController extends Controller
{
	
	public function form() {
		return view('form');
	}
	
	public function pdf($id) {
		$personalDetails = PersonalDetails::find($id);
		$proposedStudy = ProposedStudy::where('name_id', $id)->first();
		$insurance = Insurance::where('name_id', $id)->first();
		$homeInstitution = HomeInstitution::where('name_id', $id)->first();
		$englishTestResult = EnglishTestResult::where('name_id', $id)->get();
		$emergencyContact = EmergencyContact::where('name_id', $id)->first();
		$course = Course::where('name_id', $id)->get();
		$accomodation = Accomodation::where('name_id', $id)->first();

		return view('pdf', [
			'id' => $id,
			'personalDetails' => $personalDetails,
			'proposedStudy' => $proposedStudy,
			'insurance' => $insurance,
			'homeInstitution' => $homeInstitution,
			'englishTestResult' => $englishTestResult,
			'emergencyContact' => $emergencyContact,
			'course' => $course,
			'accomodation' => $accomodation,
		]);
	}

    public function print() {
		$pdf = PDF::loadView('pdf');
    	return $pdf->setPaper('a4', 'landscape')->setWarnings(false)->download('Form UP-SA.pdf');
    }
	
    public function submit(FormsRequest $request) {
		
		// dd($request->all());

		$validated = $request->validated();

    	$personalDetails =  PersonalDetails::create([
    		'fullname' => $request->input('name'),
    		'nationality' => $request->input('nationality'),
    		'date_of_birth' => $request->input('date_of_birth'),
    		'passport_number' => $request->input('passport_number'),
    		'issuing_country' => $request->input('issuing_country'),
    		'date_of_issue' => $request->input('date_of_issue'),
    		'date_of_expiry' => $request->input('date_of_expiry'),
    		'blood_type' => $request->input('blood_type'),
    		'marital_status' => $request->input('marital_status'),
    		'address' => $request->input('address'),
    		'city' => $request->input('city'),
    		'postal_code' => $request->input('postal_code'),
    		'province' => $request->input('province'),
    		'country' => $request->input('country'),
    		'phone' => $request->input('phone'),
    		'mobile' => $request->input('mobile'),
    		'email' => $request->input('email'),
    		'address2' => $request->input('address2'),
    		'city2' => $request->input('city2'),
    		'postal_code2' => $request->input('postal_code2'),
    		'province2' => $request->input('province2'),
    		'country2' => $request->input('country2'),
    		'phone2' => $request->input('phone2'),
    		'contact_name' => $request->input('contact_name'),
		]);
		
		$personalDetails->homeInstitution()->create([
			'name' =>  $request->input('institution'),
			'address' =>  $request->input('institution_address'),
    		'phone' =>  $request->input('institution_phone'),
    		'email' =>  $request->input('institution_email'),
    		'website' =>  $request->input('institution_web'),
    		'faculty_dep' =>  $request->input('faculty_dept'),
    		'start_year' =>  $request->input('start_year'),
    		'gpa' =>  $request->input('gpa'),
		]);

		$personalDetails->proposedStudy()->create([
			'semester' => $request->input('duration'),
    		'academic_year' => '20' . $request->input('year1') . '/' . '20' . $request->input('year2'),
    		'faculty' => $request->input('faculty'),
    		'department' => $request->input('department'),
    		'study_period' => $request->input('study_period'),
    		'start_date' => $request->input('start_date'),
    		'end_date' => $request->input('end_date'),
		]);

		for ($i=1; $i<=7; $i++) {
			$personalDetails->course()->create([
				'course_title' => $request->input('course_' . $i),
				'credit' => $request->input('credit_' . $i),
			]);
		}

		$personalDetails->englishTestResult()->create([
			'test' => $request->input('toefl'),
    		'score' => $request->input('score_toefl'),
    		'test_center' => $request->input('place_toefl'),	 
    		'date_tested' => $request->input('date_toefl'),
		]);

		$personalDetails->englishTestResult()->create([
    		'test' => $request->input('ielts'),
    		'score' => $request->input('score_ielts'),
    		'test_center' => $request->input('place_ielts'),	 
    		'date_tested' => $request->input('date_ielts'),
		]);

		$personalDetails->englishTestResult()->create([
    		'test' => $request->input('others'),
    		'score' => $request->input('score_others'),
    		'test_center' => $request->input('place_others'),	 
    		'date_tested' => $request->input('date_others'),
		]);

		$personalDetails->insurance()->create([
			'insurance_name' => $request->input('insurance'),
    		'validity' => $request->input('valid_date'),
    		'cover' => $request->input('cover'),
		]);

		$personalDetails->accomodation()->create([
			'accomodation_help' => $request->input('opt_acc'),
    		'address' => $request->input('address_acc'),
    		'contact_person' => $request->input('cp_acc'),
		]);

		$personalDetails->emergencyContact()->create([
			'fullname' => $request->input('emergency_name'),
    		'relationship' => $request->input('relationship'),
    		'address' => $request->input('emergency_address'),
    		'phone' => $request->input('emergency_phone'),
    		'mobile' => $request->input('emergency_mobile'),
    		'email' => $request->input('emergency_email'),
		]);
    return back()->with('success', 'Berhasil submit!');
    }
}
