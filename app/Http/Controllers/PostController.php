<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PersonalDetails;
use App\HomeInstitution;
use App\ProposedStudy;
use App\EnglishTestResult;
use App\Insurance;
use App\Accomodation;
use App\Course;
use App\EmergencyContact;
use App\File;
use DB;
use Illuminate\Http\RedirectResponse;
use Storage;
use Carbon\Carbon;
use App\Http\Requests\FileRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$personalDetails = PersonalDetails::all();
        $homeInstitution = HomeInstitution::all();
        
    	return view ('adminPage.dashboard', [
    		'personalDetails' => $personalDetails,
    		'homeInstitution' => $homeInstitution,
    	]);
    }

    public function detail(PersonalDetails $personalDetails)
    {
        // dd($personalDetails->englishTestResult);
        $files = File::ofPersonalDetails($personalDetails)->orderBy('title', 'ASC')->paginate(30);

        return view ('adminPage.detail', [
            'personalDetails' => $personalDetails,
            'files' => $files,
        ]);

    }

    public function delete(PersonalDetails $personalDetails)
    {
        $personalDetails->delete();
        return redirect()->route('admin.home');
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
