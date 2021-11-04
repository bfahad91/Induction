<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'advertisement_id' => 'required',
        'fullName'=> 'required',
        'picture'=> 'required',
        'fatherName'=> 'required',
        'dob'=> 'required',
        'domicile'=> 'required',
        'age'=> 'required',
        'birthPlace'=> 'required',
        'maritalStatus'=> 'required',
        'religion'=> 'required',
        'nationality'=> 'required',
        'cnic'=> 'required',
        'permanentAddress'=> 'required',
        'presentAddress'=> 'required',
        'pec_No'=> 'required',
        'office'=> 'required',
        'residence'=> 'required',
        'cell'=> 'required',
        'email'=> 'required',
        'postQualificationExperience'=> 'required',
        'grossMonthlySalary'=> 'required',
        'professionalAchievements'=> 'required',

        // Education
        'degreeName' => 'required',
        'Institute' => 'required',
        'to' => 'required',
        'from' => 'required',
        'passingYear' => 'required',
        'marksObtained' => 'required',
        'totalMarks' => 'required',
        'GPA_or_grade' => 'required',
        'remarks' => 'required',

        // Professional
        'courseName' => 'required',
        'instituteName' => 'required',
        'to' => 'required',
        'from' => 'required',
        'description' => 'required',

        // Employment
        'employerName' => 'required',
        'to' => 'required',
        'from' => 'required',
        'position' => 'required',
        'responsibilities' => 'required',
        ];
    }
}
