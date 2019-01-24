<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PersonalDetails;
use App\HomeInstitution;
use App\ProposedStudy;
use App\EnglishTestResult;
use App\Insurance;
use App\Accomodation;
use App\EmergencyContact;

class PostController extends Controller
{
    public function index()
    {
    	$personalDetails = PersonalDetails::all();
    	$homeInstitution = HomeInstitution::all();

        $toefl = EnglishTestResult::where('test', 'TOEFL')->get();
    	return view ('adminPage.dashboard', [
    		'personalDetails' => $personalDetails,
    		'homeInstitution' => $homeInstitution,
            'toefl' => $toefl,
    	]);
        echo $toefl;
    }

    public function detail(PersonalDetails $personalDetails)
    {
        return view ('adminPage.detail', [
            'personalDetails' => $personalDetails,
        ]);

    }
}
