<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OutFormsRequest;
use PDF;
use App\outAcademicInfo;
use App\OutApplicantDetails;
use App\OutContact;
use App\OutCourse;
use App\OutGuardianParent;
use App\OutMotivationStatement;
use App\OutOrganization;
use App\OutPersonalDetails;
use App\OutStudentAward;
use Validator;
use DB;
use Illuminate\View\View;
use Illuminate\Auth\AuthManager;
use App\File;
use Illuminate\Http\RedirectResponse;
use Storage;
use Carbon\Carbon;

class OutFormController extends Controller
{
    public function form()
    {
        return view('formPage.formOut');
    }

    public function pdf(Request $request, $id) {
        $outPersonalDetails = OutPersonalDetails::find($id);
        $outAcademicInfo = OutAcademicInfo::where('nameOut_id', $id)->first();
        $outApplicantDetails = OutApplicantDetails::where('nameOut_id', $id)->first();
        $outContact = OutContact::where('nameOut_id', $id)->first();
        $outCourse = OutCourse::where('nameOut_id', $id)->first();
        $outGuardianParent = OutGuardianParent::where('nameOut_id', $id)->first();
        $outMotivationStatement = OutMotivationStatement::where('nameOut_id', $id)->first();
        $outOrganization = OutOrganization::where('nameOut_id', $id)->first();
        $outStudentAward = OutStudentAward::where('nameOut_id', $id)->first();

        if ($request->id === $id) {
            $pdf = PDF::loadView('out-pdf', [
                'id' => $id,
                'outPersonalDetails' => $outPersonalDetails,
                'outAcademicInfo' => $outAcademicInfo,
                'outApplicantDetails' => $outApplicantDetails,
                'outContact' => $outApplicantDetails,
                'outCourse' => $outCourse,
                'outGuardianParent' => $outGuardianParent,
                'outMotivationStatement' => $outMotivationStatement,
                'outOrganization' => $outOrganization,
                'outStudentAward' => $outStudentAward,
            ]);
            return $pdf->setPaper('a4', 'landscape')->setWarnings(false)->download('Form UP-SA (OUTBOUND).pdf');
        }
    }


    public function submit(OutFormsRequest $request){

        $validated = $request->validated();

        $outPersonalDetails = OutPersonalDetails::create([

            'nim' => $request->input('student_number'),
            'fullname' => $request->input('name'),
            'gender' => $request->input('gender'),
            'place_of_birth' => $request->input('place_of_birth'),
            'date_of_birth' => $request->input('date_of_birth'),
            'nationality' => $request->input('nationality'),
            'religion' => $request->input('religion'),
            'passport_number' => $request->input('passport_number'),
            'pssport_expired' => $request->input('expire_of_passport'),
        ]);

        $outPersonalDetails->outContact()->create([
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile_number'),
            'telp' => $request->input('telphone'),
            'address' => $request->input('address'),
        ]);

        $outPersonalDetails->outApplicantDetails()->create([
            'type_program' => $request->input('program'),
            'program_period' =>  $request->input('period'),
            'host_univ' => $request->input('host_univ'),
        ]);

        for($i=1; $i<=7; $i++) {
            $outPersonalDetails->outCourse()->create([
                'course_title' => $request->input('course_' . $i),
                'credit' => $request->input('credit_' . $i),
            ]);
        }

        $outPersonalDetails->outAcademic()->create([
            'department' => $request->input('department'),
            'semester' => $request->input('year_sem'),
            'gpa' => $request->input('gpa'),
            'english_score' => $request->input('toefl_ielts'),
            'date_test_english' => $request->input('date_toefl_ielts'),
        ]);

        for($i=1; $i<=3; $i++) {
            $outPersonalDetails->outOrganization()->create([
                'name_org' => $request->input('org_' . $i),
                'year_org' => $request->input('year_org_' . $i),
            ]);
        }
        
        for($i=1; $i<=3; $i++) {
            $outPersonalDetails->outStudentAward()->create([
                'name_award' => $request->input('award_' . $i),
                'name_institution' => $request->input('institut_' . $i),
                'year_award' => $request->input('year_award_' . $i),
            ]);
        }

        $outPersonalDetails->outGuardianParent()->create([
            'fullname' => $request->input('emergency_name'),
            'relationship' => $request->input('relationship'),
            'address' => $request->input('emergency_address'),
            'phone' => $request->input('emergency_phone'),
            'mobile' => $request->input('emergency_mobile'),
            'email' => $request->input('emergency_email'),
        ]);

        $outPersonalDetails->outMotivationStatement()->create([
            'text'=> $request->input('motivation'),
        ]);

        $id = OutPersonalDetails::max('id');

        $file = [
            'form_orang_tua',
            'form_language',
            'copy_ktm',
            'transcript',
            'photo'
        ];

        foreach ($file as $fileItem) {
            $uploadedFile = $request->file($fileItem);        
            $path = $uploadedFile->store('public/files');
            
            $outPersonalDetails->outFile()->create([
                'title' => $uploadedFile->getClientOriginalName(),
                'filename' => $path
            ]);

        }


        return back()->with('success', 'Berhasil submit! Silakan download berkas anda <a href="'.route('pdf', ['id' => $id]).'"><b>disini</b></a>');
    }
}
