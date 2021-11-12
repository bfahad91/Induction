<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

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
            'fullName' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'cv_file' => 'nullable|mimes:pdf|max:2048',
            'fatherName' => 'required',
            'dob' => 'required',
            'domicile' => 'required',
            'age' => 'required',
            'birthPlace' => 'required',
            'maritalStatus' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'cnic' => 'required',
            'permanentAddress' => 'required',
            'presentAddress' => 'required',
            'pec_No' => 'required',
            'office' => 'required',
            'residence' => 'required',
            'cell' => 'required',
            'email' => 'required',
            'postQualificationExperience' => 'required',
            'grossMonthlySalary' => 'required',
            'professionalAchievements' => 'required',

                'courseName.*' => 'required',
                'instituteName.*' => 'required',
                'to_prof_inst.*' => 'required',
                'from_prof_ins.*' => 'required',
                'description.*' => 'required',

                'degreeName.*' => 'required',
                'institute.*' => 'required',
                'to_institute.*' => 'required',
                'from_institute.*' => 'required',
                'passingYear.*' => 'required',
                'marksObtained.*' => 'required',
                'totalMarks.*' => 'required',
                'GPA_or_grade.*' => 'required',
                'remarks.*' => 'required',

                'employerName.*' => 'required',
                'to_employer.*' => 'required',
                'from_employer.*' => 'required',
                'position.*' => 'required',
                'responsibilities.*' => 'required',
        ];
    }
}
