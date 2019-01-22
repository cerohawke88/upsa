<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalDetails;
use App\HomeInstitution;
class PostController extends Controller
{
    public function index()
    {
    	$personalDetails = PersonalDetails::all();
    	$homeInstitution = HomeInstitution::all();

    	return view ('adminPage.dashboard', [
    		'personalDetails' => $personalDetails,
    		'homeInstitution' => $homeInstitution,
    	]);
    }

    public function detail(PersonalDetails $personalDetails, HomeInstitution $homeInstitution)
    {
        $personalDetails = PersonalDetails::all();
        $homeInstitution = HomeInstitution::all();

        return view ('adminPage.detail', [
            'personalDetails' => $personalDetails,
            'homeInstitution' => $homeInstitution,
        ]);
    }
}
