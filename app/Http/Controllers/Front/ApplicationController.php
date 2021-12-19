<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationFormRequest;
use App\Models\Advertisement;
use App\Models\Application;
use App\Models\EducationInfo;
use App\Models\EmploymentInfo;
use App\Models\ProfessionalInfo;
use Carbon\Carbon;
use PDF;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::where('is_active',true)->whereDate('end_date', '>=', Carbon::now('Asia/Karachi'))->orderBy('id', 'desc')->get();
        return view('welcome', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Advertisement $advertisement)
    {
        // if($advertisement->end_date < Carbon::now())
        // {
        //     return redirect()->back()->with('error','Application date Over!');
        // }
        return view('front.application.application', compact('advertisement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationFormRequest $request)
    {
        $prof_count = count($request->courseName);
        $degree_count = count($request->degreeName);
        $emp_count = count($request->employerName);
        $rules = [];
        // dd($request->all());
        if($request->file('cv_file')){
            // store CV
            $cvname = $request->fullName . '-' . $request->cnic . '-' .date("d-m-Y");
            $cv = $request->file('cv_file')->storeAs('public/uploads/cvs', $cvname);
            $request->merge(['cv' => 'storage/uploads/cvs/' . $cvname]);
        }
        // store image
        $imageName = $request->fullName . '-' . $request->cnic . '-' .date("d-m-Y");
        $img = $request->file('image')->storeAs('public/uploads/images', $imageName);
        $request->merge(['picture' => 'storage/uploads/images/' . $imageName]);

        $application = Application::create([
            'advertisement_id' => $request->advertisement_id,
            'fullName' => $request->fullName,
            'fatherName' => $request->fatherName,
            'picture' => $request->picture,
            'cnic' => $request->cnic,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'caste' => $request->caste,
            'age' => $request->age,
            'age_relaxation' => $request->age_relaxation,
            'religion' => $request->religion,
            'sect' => $request->sect,
            'domicile' => $request->domicile,
            'domicile_district' => $request->domicile_district,
            'cell' => $request->cell,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'presentAddress' => $request->presentAddress,
            'permanentAddress' => $request->permanentAddress,
            'cv' => $request->cv,

            // 'birthPlace' => $request->birthPlace,
            // 'maritalStatus' => $request->maritalStatus,
            // 'nationality' => $request->nationality,
            // 'pec_No' => $request->pec_No,
            // 'office' => $request->office,
            // 'postQualificationExperience' => $request->postQualificationExperience,
            // 'grossMonthlySalary' => $request->grossMonthlySalary,
            // 'professionalAchievements' => $request->professionalAchievements,
            // 'name_ad_newspaper' => $request->name_ad_newspaper,
        ]);
        for ($i = 0; $i < $prof_count; $i++) {
            $profession['courseName'] = $request->courseName[$i];
            $profession['instituteName'] = $request->instituteName[$i];
            $profession['to_prof_inst'] = $request->to_prof_inst[$i];
            $profession['from_prof_inst'] = $request->from_prof_inst[$i];
            $profession['description'] = $request->description[$i];
            $profession['application_id'] = $application->id;
            $professional[] = ProfessionalInfo::create($profession);
        }
        for ($i = 0; $i < $degree_count; $i++) {
            $education["degreeName"] = $request->degreeName[$i];
            $education["institute"] = $request->institute[$i];
            $education["to_institute"] = $request->to_institute[$i];
            $education["from_institute"] = $request->from_institute[$i];
            $education["passingYear"] = $request->passingYear[$i];
            $education["marksObtained"] = $request->marksObtained[$i];
            $education["totalMarks"] = $request->totalMarks[$i];
            $education["GPA_or_grade"] = $request->GPA_or_grade[$i];
            $education["remarks"] = $request->remarks[$i];
            $education['application_id'] = $application->id;
            $educational[] = EducationInfo::create($education);
        }
        for ($i = 0; $i < $emp_count; $i++) {
            $emp["employerName"] = $request->employerName[$i];
            $emp["to_employer"] = $request->to_employer[$i];
            $emp["from_employer"] = $request->from_employer[$i];
            $emp["position"] = $request->position[$i];
            $emp["responsibilities"] = $request->responsibilities[$i];
            $emp['application_id'] = $application->id;
            $employment[] = EmploymentInfo::create($emp);
        }

        return view('front.thankyou',compact('application'))->with('success', 'Form Submitted!');
    }
    public function generatePDF(Application $application)
    {
        // return view('slip2', compact('application'));
        set_time_limit(180);
        $pdf = PDF::loadView('slip',$application);
        // $pdf = view('slip',compact($application));
        // $pdf2 = PDF::loadHTML($pdf)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        return $pdf->download('Test-Slip.pdf');
    }
}
