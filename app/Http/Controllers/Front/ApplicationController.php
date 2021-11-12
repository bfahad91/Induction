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

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::where('is_active',true)->where('end_date', '>', Carbon::now())->orderBy('id', 'desc')->get();
        return view('welcome', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Advertisement $advertisement)
    {
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
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        // ]);
        if($request->file('cv_file')){
            // $request->validate([
            //     'cv_file' => 'required|mimes:pdf|max:2048',
            // ]);
            // store CV
            $cvname = $request->fullName . '-' . $request->cnic . '-' .date("d-m-Y");
            $cv = $request->file('cv_file')->storeAs('public/uploads/cvs', $cvname);
            $request->merge(['cv' => 'storage/uploads/cvs/' . $cvname]);
        }
        // store image
        $imageName = $request->fullName . '-' . $request->cnic . '-' .date("d-m-Y");
        $img = $request->file('image')->storeAs('public/uploads/images', $imageName);
        $request->merge(['picture' => 'storage/uploads/images/' . $imageName]);
        // dd($request->validated(),$request->all());
        // for ($i = 0; $i < $prof_count; $i++) {
        //     $rules["courseName.{$i}"] = 'required';
        //     $rules["instituteName.{$i}"] = 'required';
        //     $rules["to_prof_inst.{$i}"] = 'required';
        //     $rules["from_prof_inst.{$i}"] = 'required';
        //     $rules["description.{$i}"] = 'required';
        // }
        // for ($i = 0; $i < $degree_count; $i++) {
        //     $rules["degreeName.{$i}"] = 'required';
        //     $rules["institute.{$i}"] = 'required';
        //     $rules["to_institute.{$i}"] = 'required';
        //     $rules["from_institute.{$i}"] = 'required';
        //     $rules["passingYear.{$i}"] = 'required';
        //     $rules["marksObtained.{$i}"] = 'required';
        //     $rules["totalMarks.{$i}"] = 'required';
        //     $rules["GPA_or_grade.{$i}"] = 'required';
        //     $rules["remarks.{$i}"] = 'required';
        // }
        // for ($i = 0; $i < $emp_count; $i++) {
        //     $rules["employerName.{$i}"] = 'required';
        //     $rules["to_employer.{$i}"] = 'required';
        //     $rules["from_employer.{$i}"] = 'required';
        //     $rules["position.{$i}"] = 'required';
        //     $rules["responsibilities.{$i}"] = 'required';
        // }

        // $validator = Validator::make($request->all(), $rules);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator->errors());
        // }


        $application = Application::create([
            'advertisement_id' => $request->advertisement_id,
            'fullName' => $request->fullName,
            'picture' => $request->picture,
            'cv' => $request->cv,
            'fatherName' => $request->fatherName,
            'dob' => $request->dob,
            'domicile' => $request->domicile,
            'age' => $request->age,
            'birthPlace' => $request->birthPlace,
            'maritalStatus' => $request->maritalStatus,
            'religion' => $request->religion,
            'nationality' => $request->nationality,
            'cnic' => $request->cnic,
            'permanentAddress' => $request->permanentAddress,
            'presentAddress' => $request->presentAddress,
            'pec_No' => $request->pec_No,
            'office' => $request->office,
            'residence' => $request->residence,
            'cell' => $request->cell,
            'email' => $request->email,
            'postQualificationExperience' => $request->postQualificationExperience,
            'grossMonthlySalary' => $request->grossMonthlySalary,
            'professionalAchievements' => $request->professionalAchievements,
            'name_ad_newspaper' => $request->name_ad_newspaper,
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

        return redirect()->route('welcome')->with('success', 'Form Submitted!');
    }
}
