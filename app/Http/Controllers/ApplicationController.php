<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationFormRequest;
use App\Models\Advertisement;
use App\Models\Application;
use App\Models\EducationInfo;
use App\Models\EmploymentInfo;
use App\Models\ProfessionalInfo;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::all();
        return view('front.advertisement.list',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Advertisement $advertisement)
    {
        return view('front.application.application',compact('advertisement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $count = count($request->courseName);
        for ($i=0; $i < $count; $i++) {
            $education['courseName'] = $request->courseName[$i];
            $education['instituteName'] = $request->instituteName[$i];
            $education['to'] = $request->to[$i];
            $education['from'] = $request->from[$i];
            $education['description'] = $request->description[$i];
            $education['application_id'] = 1;
            $profession[] = ProfessionalInfo::create($education);
        }
        dd($request->all(), $profession);
        $application = Application::create(['advertisement_id' => $request->advertisement_id,
        'fullName' => $request->fullName,
        'picture' => $request->picture,
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
        // 'education_infos' => $request->education_infos,
        'pec_No' => $request->pec_No,
        'office' => $request->office,
        'residence' => $request->residence,
        'cell' => $request->cell,
        'email' => $request->email,
        'postQualificationExperience' => $request->postQualificationExperience,
        'grossMonthlySalary' => $request->grossMonthlySalary,
        'professionalAchievements' => $request->professionalAchievements,
        'name_ad_newspaper' => $request->name_ad_newspaper,]);

        ProfessionalInfo::create([
            'courseName' => $request->courseName,
            'instituteName' => $request->instituteName,
            'to' => $request->to,
            'from' => $request->from,
            'description' => $request->description,
            'application_id' => $application->id,]);
        EducationInfo::create(['degreeName' => $request->degreeName,
        'Institute' => $request->Institute,
        'to' => $request->to,
        'from' => $request->from,
        'passingYear' => $request->passingYear,
        'marksObtained' => $request->marksObtained,
        'totalMarks' => $request->totalMarks,
        'GPA_or_grade' => $request->GPA_or_grade,
        'remarks' => $request->remarks,
        'application_id' => $application->id,]);



        EmploymentInfo::create(['employerName' => $request->remarks,
        'to' => $request->to,
        'from' => $request->from,
        'position' => $request->position,
        'responsibilities' => $request->responsibilities,
        'application_id' => $application->id,]);

        // dd(2);
        return redirect()->route('ads.index')->with('success','Form Submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
