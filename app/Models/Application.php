<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Application extends Model
{
    use HasFactory;

    protected $fillable =[
        'advertisement_id',
        'fullName',
        'picture',
        'fatherName',
        'dob',
        'domicile',
        'age',
        'birthPlace',
        'maritalStatus',
        'religion',
        'nationality',
        'cnic',
        'permanentAddress',
        'presentAddress',
        // 'education_infos',
        'pec_No',
        'office',
        'residence',
        'cell',
        'email',
        'postQualificationExperience',
        'grossMonthlySalary',
        'professionalAchievements',
        'name_ad_newspaper'
    ];

    /**
     * Get the advertisement associated with the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function advertisement(): HasOne
    {
        return $this->hasOne(Advertisement::class,'advertisement_id','id');
    }

    /**
     * Get all of the education_infor for the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function education_info(): HasMany
    {
        return $this->hasMany(EducationInfo::class, 'application_id', 'id');
    }
    public function employment_info(): HasMany
    {
        return $this->hasMany(EmploymentInfo::class, 'application_id', 'id');
    }
    public function professional_info(): HasMany
    {
        return $this->hasMany(ProfessionalInfo::class, 'application_id', 'id');
    }
}
