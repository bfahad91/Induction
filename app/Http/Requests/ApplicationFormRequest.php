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
            'fatherName' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'cnic' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'caste' => 'required',
            'age' => 'required',
            'age_relaxation' => 'nullable',
            'religion' => 'required',
            'sect' => 'nullable',
            'domicile' => 'required',
            'domicile_district' => 'required',
            'cell' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
            'presentAddress' => 'required',
            'permanentAddress' => 'required',
            'cv_file' => 'nullable|mimes:pdf|max:2048',

            // 'birthPlace' => 'required',
            // 'maritalStatus' => 'required',
            // 'nationality' => 'required',
            // 'office' => 'required',

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
