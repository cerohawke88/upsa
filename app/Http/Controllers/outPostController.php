<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OutAcademicInfo;
use App\OutApplicantDetails;
use App\OutContact;
use App\OutCourse;
use App\OutGuardianParent;
use App\OutMotivationStatement;
use App\OutOrganization;
use App\OutPersonalDetails;
use App\OutStudentAward;
use App\outFile;
use DB;
use Illuminate\Http\RedirectResponse;
use Storage;
use Carbon\Carbon;
use App\Http\Requests\FileRequest;

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
        $files = outFile::ofPersonalDetails($outPersonalDetails)->orderBy('title', 'ASC')->paginate(30);
        return view('adminPage.outDetail', [
            'outPersonalDetails' => $outPersonalDetails,
            'files' => $files,
        ]);
    }

    public function delete(OutPersonalDetails $outPersonalDetails)
    {
        $outPersonalDetails->delete();
        return redirect()->route('admin.outHome');
    }

    /**
     * Download file directly.
     *
     * @param File $file
     * @return void
     */
    public function download(File $file, FileRequest $request)
    {
        return Storage::download($file->filename, $file->title);
    }
}