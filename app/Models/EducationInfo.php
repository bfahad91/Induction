<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EducationInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'degreeName',
        'Institute',
        'to',
        'from',
        'passingYear',
        'marksObtained',
        'totalMarks',
        'GPA_or_grade',
        'remarks',
        'application_id'
    ];

    /**
     * Get the application associated with the EducationInfo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function application(): HasOne
    {
        return $this->hasOne(Application::class, 'application_id', 'id');
    }
}
