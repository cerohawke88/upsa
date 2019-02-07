<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\outAcademicInfo;
use App\OutApplicantDetails;
use App\OutContact;
use App\OutCourse;
use App\OutGuardianParent;
use App\OutMotivationStatement;
use App\OutOrganization;
use App\OutPersonalDetails;
use App\OutStudentAward;
use DB;

class outPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $outPersonalDetails = OutPersonalDetails::all();
        $outApplicantDetails = OutApplicantDetails::all();

        return view('adminPage.outDashboard', [
            'outPersonalDetails' => $outPersonalDetails,
            'outApplicantDetails' => $outApplicantDetails,
        ]);
    }

    public function detail(OutPersonalDetails $outPersonalDetails)
    {
        return view('adminPage.outDetail', [
            'outPersonalDetails' => $outPersonalDetails,
        ]);
    }

    public function delete(OutPersonalDetails $outPersonalDetails)
    {
        $outPersonalDetails->delete();
        return redirect()->route('admin.outHome');
    }
}